
from django.conf.urls import url, include   
from django.contrib import admin

urlpatterns = [
    url(r'^$', include('posts.urls')),
    url(r'^admin/', admin.site.urls),
    url(r'^posts/', include('posts.urls')),
]
