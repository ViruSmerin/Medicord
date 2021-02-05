from django import forms
from .models import User

class UserForm(forms.ModelForm):
    password1 = forms.CharField(widget=forms.PasswordInput(attrs={
        'class': 'form-control',
        'required': 'true',
        'placeholder': 'Password'}))
    password2 = forms.CharField(widget=forms.PasswordInput(attrs={
        'class': 'form-control',
        'required': 'true',
        'placeholder': 'Confirm Password'}))

    class Meta:
        model = User
        fields = [
            "full_name","email", "password1", "password2"
        ]

    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.fields["full_name"].widget.attrs.update(
            {'placeholder': 'Full Name', 'required': 'true'})
        self.fields["email"].widget.attrs.update(
            {'placeholder': 'E-Mail', 'required': 'true'})

    def clean_password(self):
        password1 = self.cleaned_data.get('password1')
        password2 = self.cleaned_data.get('password2')

        if not password1:
                raise forms.ValidationError("Password is required !")
        if not password2:
            raise forms.ValidationError("You must confirm your password !")
        if password1 != password2:
            raise forms.ValidationError("Your passwords do not match !")

        return password2

    def clean_email(self):
        email = self.cleaned_data['email']
        try:
            email = User.objects.exclude(pk=self.instance.pk).get(email=email)
        except email.DoesNotExist:
            return email
        raise forms.ValidationError("Email already exists !")

