<!DOCTYPE html>
<html class="with-statusbar-overlay">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <title>Calendar</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.colors.min.css">
      <link rel="stylesheet" href="css/style.css">
   
   </head>
   <body>
           <div class="section">
        
        <div class="registrieren topbar">
            <div class="txt_topbar">Duell</div>
        </div>
        
        <div class="formline">
        </div>
 
        
        <div class="dauer">
                 <div class="page-content">
                     <div class="list-block">
                        <ul>
                           <li>
                              <div class="item-content">
                                 <div class="item-inner">
                                    <div class="item-input lol">
                                        
                                       <input style="color:white;" type="text" placeholder="Dauer" readonly id="calendar-range">
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div> <!-- page-content -->
        </div>
        
    
         <div class="formline duell_link">
     
        </div>
  
   
        <div class="formline">
            <button class="button_duell">Link teilen</button>
            
        </div>
    
        <div class="formline duell_link">
            
        </div>
    
        <div class="formline">
        </div>
        
        <div class="duell_bottom_einst">
        <a href="duellmode.php">Duell starten</a>
        </div>
    
    </div> <!-- section -->


      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/js/framework7.min.js"></script>
      <script>
         var myApp = new Framework7();

         // Range Picker
         var calendarRange = myApp.calendar({
             input: '#calendar-range',
             dateFormat: 'dd M yyyy',
             rangePicker: true
         });


      </script>
   </body>
</html>