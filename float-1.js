document.getElementById('content').innerHTML = "<p>testing one two</p>";
var xhr=new XMLHttpRequest;
xhr.open('get','kcpharm.html',true);
xhr.send();
xhr.onload=function() {
  if(xhr.status===200)  {
    document.getElementById('test').innerHTML = "<p>dismissNote</p>";
   
    
  }
    
};
function dismissNote() {
  document.getElementById('about').innerHTML = "<p>event about</p>";
 







    
    
  }
  
  var ell=document.getElementById('reply');
  ell.addEventListener( 'focus', dismissNote, false);
  
 