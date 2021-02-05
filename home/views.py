from django.shortcuts import render
from django.views.generic import View
from .forms import UserForm

class HomeView(View):
    '''for dashboard'''
    def get(self,request):
        '''get method for dashboard'''
        return render(request,'index.html')
   
class DietView(View):
    '''for Diet'''
    def get(self,request):
        return render(request,'diet.html')