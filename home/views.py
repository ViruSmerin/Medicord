from django.shortcuts import render
from django.views.generic import View
from django.conf import settings
import os
class HomeView(View):
    def get(self,request):
        print(str(settings.BASE_DIR) + '/templates/html/index.html','views')
        return render(request,'index.html')