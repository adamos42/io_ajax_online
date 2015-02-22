Ionize Online visitors module
==============

Ajax online visitors counter module for Ionize 1.x.x, This module store visitor datas from last 10 minute and with ajax can be get the last 5 minute visitors number. The module automatic delete the more than 10 minute datas.

#### Author

- Adam Liszkai / adamos42

#### Require
- Ionize > 1.x.x
- jQuery

### Installation

1. Clone the module into your modules folder or Upload io_visitors folder from downloadded clone
2. Add a snippet to your page
3. Buy me a coffee! :)

##### You Liked this module? [Send a Donation](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=contact%40liszkaiadam%2ehu&lc=US&item_name=Adam%20Liszkai%20webdeveloper&item_number=io_online&no_note=0&currency_code=USD&bn=PP%2dDonationsBF%3apaypal%2ddonate%2epng%3aNonHostedGuest) with `PayPal `

#### Snippet:

```html
<script type="text/javascript">
var Visitors = new (function()
{
   // Check the jQuery exists if not then return the alert
   if(typeof jQuery == "undefined") return alert("jQuery is required for Ajax visitors module!");
   
   // Set the visitors status container html element
   this.container = $("#online-users");
   
   // Create the interval variable
   this.online_interval = null;
   
   // Declare the refresh method
   this.refresh = function()
   {
      console.log("Visitors.refresh() executed");
   
      jQuery.ajax({
         url: "<ion:base_url />io_online/visit",
         success: function(data, textStatus, jqXHR)
         {
            var json = $.parseJSON(data);
            console.debug("Visitors.refresh: ajax request was successfull", json);
            
            if(json.success) // If the module was successfull
            {
               console.debug("Visitors.refresh: replace the visitors container content");
               Visitors.container.html( json.visits );
            }
         }
      });
   }
   
   console.debug("Visitors: set the interval to keep up to date the module");
   this.online_interval = setInterval(function()
   {
      Visitors.refresh();
   },
   5000);
   
   console.debug("Visitors: Refresh the visitors data");
   this.refresh();
   
   console.log("Visitors: Module JavaScript object created successfull");
   return this; // Return the $this object to the variable
});
</script>
```
