(function () {
        var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
        if (window.ShopifyBuy) {
          if (window.ShopifyBuy.UI) {
            ShopifyBuyInit();
          } else {
            loadScript();
          }
        } else {
          loadScript();
        }

      function loadScript() {
        var script = document.createElement('script');
        script.async = true;
        script.src = scriptURL;
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
        script.onload = ShopifyBuyInit;
      }

      function ShopifyBuyInit() {
        var client = ShopifyBuy.buildClient({
          domain: 'pressley-vineyards.myshopify.com',
          storefrontAccessToken: '1cd2e826a898c5b953a1ad9fc5ef0233',
        });

        ShopifyBuy.UI.onReady(client).then(function (ui) {
          ui.createComponent('product', {
            id: [1691647311935],
            node: document.getElementById('product-component-1551288128242'),
            moneyFormat: '${{amount}}',
            options: {"product":{"buttonDestination":"checkout","layout":"horizontal","variantId":"all","width":"100%","contents":{"img":false,"imgWithCarousel":true,"variantTitle":false,"description":true,"buttonWithQuantity":false,"quantity":false},"text":{"button":"Sign Up"},"styles":{"product":{"text-align":"left","@media (min-width: 601px)":{"max-width":"100%","margin-left":"0","margin-bottom":"50px"}},"button":{"background-color":"#988447","padding-left":"px","padding-right":"px",":hover":{"background-color":"#897740"},"border-radius":"px",":focus":{"background-color":"#897740"}},"title":{"font-size":"26px"},"price":{"font-size":"18px"},"compareAt":{"font-size":"15px"}}},"cart":{"contents":{"button":true},"text":{"button":"Checkout"},"styles":{"button":{"background-color":"#988447",":hover":{"background-color":"#897740"},"border-radius":"px",":focus":{"background-color":"#897740"}},"title":{"color":"#2d2a26"},"footer":{"background-color":"#ffffff"},"header":{"color":"#2d2a26"},"lineItems":{"color":"#2d2a26"},"subtotalText":{"color":"#2d2a26"},"subtotal":{"color":"#2d2a26"},"notice":{"color":"#2d2a26"},"currency":{"color":"#2d2a26"},"close":{":hover":{"color":"#2d2a26"},"color":"#2d2a26"},"emptyCart":{"color":"#2d2a26"}}},"modalProduct":{"contents":{"img":false,"imgWithCarousel":true,"variantTitle":false,"buttonWithQuantity":true,"button":false,"quantity":false},"styles":{"product":{"@media (min-width: 601px)":{"max-width":"100%","margin-left":"0px","margin-bottom":"0px"}},"button":{"background-color":"#988447","padding-left":"px","padding-right":"px",":hover":{"background-color":"#897740"},"border-radius":"px",":focus":{"background-color":"#897740"}}}},"toggle":{"styles":{"toggle":{"background-color":"#988447",":hover":{"background-color":"#897740"},":focus":{"background-color":"#897740"}},"count":{"color":"#ffffff",":hover":{"color":"#ffffff"}},"iconPath":{"fill":"#ffffff"}}},"productSet":{"styles":{"products":{"@media (min-width: 601px)":{"margin-left":"-20px"}}}},"lineItem":{"styles":{"variantTitle":{"color":"#2d2a26"},"title":{"color":"#2d2a26"},"price":{"color":"#2d2a26"},"quantity":{"color":"#2d2a26"},"quantityIncrement":{"color":"#2d2a26","border-color":"#2d2a26"},"quantityDecrement":{"color":"#2d2a26","border-color":"#2d2a26"},"quantityInput":{"color":"#2d2a26","border-color":"#2d2a26"}}}},
          });
        });
      }
    })();