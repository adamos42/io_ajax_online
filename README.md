Ajax_online module
==============

Ajax online visitors counter module for Ionize 1.x.x, This module store visitor datas from last 10 minute and with ajax
you can get the last 5 minute visitors number. The module automatic delete the more than 10 minute datas.

#### Author

- Adam Liszkai / adamos42

#### Require
- Ionize > 1.x.x
- jQuery

#### Usage & Example:

```html
<script type="text/javascript">
$(function() {
   
   get_visits();
   
   var online_interval = setInterval(function() {
   
      get_visits();
   
   }, 5000);

   function get_visits() {
   
      $.ajax({
         url: "/ajax_online/visit",
         success: function(data) {
            
            var json = $.parseJSON(data);
            
            if(json.success) {
            
               $("#online-users").html( json.visits );
            
            }
            
         }
      });
   
   }

});
</script>
```
