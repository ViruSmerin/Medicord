from django.urls import path
from .views import *

urlpatterns = [
    path('home/',HomeView.as_view(),name='index'),
    path('diet/',DietView.as_view(),name='index'),
]