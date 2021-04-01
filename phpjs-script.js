var xhr=new XMLHttpRequest;
xhr.open('get','../kcpharm.html',true);
xhr.send();
xhr.onload=function() {
  if(xhr.status===200)  {
    document.getElementById('content').innerHTML = xhr.responseText;
  }
    
}

function input() {
  
  document.getElementById('another').innerHTML = 'asfgfdgfvkgkj';
  
  
}

var ell=document.getElementById('reply');
ell.onclick=input;