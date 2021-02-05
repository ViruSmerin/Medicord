from django.db import models
from django.contrib.auth.models import AbstractUser

class User(AbstractUser):
    full_name = models.CharField('Full Name',max_length=255)
    otp_code = models.PositiveIntegerField(max_length=10, default=0)
    def __str__(self):
        return self.full_name

    
