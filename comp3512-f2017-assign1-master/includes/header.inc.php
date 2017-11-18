<header class="mdl-layout__header">
     <div class="mdl-layout__header-row">
     <h1 class="mdl-layout-title"><span>CRM</span> Admin</h1>
 
      <div class="mdl-layout-spacer"></div>
      
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
                  
          
                  
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
        
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp">
        </div>
        <label id="tt2" class="material-icons mdl-badge mdl-badge--overlap" data-badge="5">account_box</label>  
<div class="mdl-tooltip" for="tt2">Messages</div>                     
                 
<label id="tt3" class="material-icons mdl-badge mdl-badge--overlap" data-badge="4">notifications</label> 
 <div class="mdl-tooltip" for="tt3">Notifications</div> 
        <label id="tt4" class="material-icons mdl-badge mdl-badge--overlap">power_settings_new
</label> 
<div id="tt4" class="mdl-tooltip" for="tt4">Logout</div>   
</div>
   </div>
    <script>    
    // var currentSearchValue = document.getElementById('fixed-header-drawer-exp').defaultValue;
    //window.alert(currentSearchValue);
     document.getElementById('fixed-header-drawer-exp').addEventListener('click',function(){
      
        var searchButton = document.getElementById('fixed-header-drawer-exp');
     var currentSearchValue = document.getElementById('fixed-header-drawer-exp').value;
     if (currentSearchValue != searchButton.defaultValue)
     {
      window.location.href="browse-employees.php?lastname="+ currentSearchValue ;
     
     }
     
      
      
     });
     
     document.getElementById('tt4').addEventListener('click',function(){
      //window.alert("sometext");
       window.location.href="logOut.php";
     });
     
    
    </script>
  </header>
