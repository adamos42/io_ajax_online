Ionize Online visitors module
==============

Ajax online visitors counter module for Ionize 1.x.x, This module store visitor datas from last 10 minute and with ajax can be get the last 5 minute visitors number. The module automatic delete the more than 10 minute datas.

#### Author

- Adam Liszkai / adamos42

#### Require
- Ionize > 1.x.x
- jQuery

#### Usage & Example:

```html
<script type="text/javascript">
var Visitors = new (function()
{
   var $this = {}; // Create object to containt methods and variables
   
   // Check the jQuery exists if not then return the alert
   if(typeof jQuery == "undefined") return alert("jQuery is required for Ajax visitors module!");
   
   // Set the visitors status container html element
   $this.visitors_container = $("#online-users");
   
   // Create the interval variable
   $this.online_interval = null;
   
   // Declare the refresh method
   $public.refresh = function()
   {
      console.log("Visitors.refresh() executed");
   
      jQuery.ajax({
         url: "<ion:base_url />ajax_online/visit",
         success: function(data, textStatus, jqXHR)
         {
            var json = $.parseJSON(data);
            console.debug("Visitors.refresh: ajax request was successfull", json);
            
            if(json.success) // If the module was successfull
            {
               console.debug("Visitors.refresh: replace the visitors container content");
               $public.visitors_container.html( json.visits );
            }
         }
      });
   }
   
   console.debug("Visitors: set the interval to keep up to date the module");
   $this.online_interval = setInterval(function()
   {
      Visitors.refresh();
   },
   5000);
   
   console.debug("Visitors: Refresh the visitors data");
   $this.refresh();
   
   console.log("Visitors: Module JavaScript object created successfull");
   return $this; // Return the $this object to the variable
});
</script>
```
