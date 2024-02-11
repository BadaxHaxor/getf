<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1><strong>404 Not Found</strong></h1>";
    echo "The requested URL/badpage was not found on this server";
}

if (isset($_GET['gacor'])) {
    $filename = "listkw.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['gacor']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="">
    <link rel="amphtml" href="https://kontolkuda.pages.dev/uho/"/>
    <link rel="canonical" href="<?php echo $urlPath ?>"><link rel="icon" type="image/png" href="//slot-anti-boncos.myshopify.com/cdn/shop/files/logo-gs88.png?crop=center&height=32&v=1706103887&width=32"><link rel="preconnect" href="https://fonts.shopifycdn.com" crossorigin><title>
      <?php echo $BRANDS ?> 🚨 Daftar Link Situs Slot Paling Gacor Dan Gampang Menang Malam Hari Ini
 &ndash; <?php echo $BRANDS ?></title>

    
      <meta name="description" content="Temukan situs <?php echo $BRANDS ?> paling sukses dengan panduan kami. Tingkatkan peluang Anda untuk menang dengan permainan slot berperingkat teratas. Jangan lewatkan pembayaran tertinggi dan gameplay termudah. Bergabunglah sekarang dan dominasi malam ini!">
    

    

<meta property="og:site_name" content="<?php echo $BRANDS ?>">
<meta property="og:url" content="<?php echo $urlPath ?>">
<meta property="og:title" content="<?php echo $BRANDS ?> 🚨 Daftar Link Situs Slot Paling Gacor Dan Gampang Menang Malam Hari Ini">
<meta property="og:type" content="product">
<meta property="og:description" content="Temukan situs <?php echo $BRANDS ?> paling sukses dengan panduan kami. Tingkatkan peluang Anda untuk menang dengan permainan slot berperingkat teratas. Jangan lewatkan pembayaran tertinggi dan gameplay termudah. Bergabunglah sekarang dan dominasi malam ini!"><meta property="og:image" content="http://slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347">
  <meta property="og:image:secure_url" content="https://slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347">
  <meta property="og:image:width" content="1080">
  <meta property="og:image:height" content="1080"><meta property="og:price:amount" content="10.000,00">
  <meta property="og:price:currency" content="IDR"><meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $BRANDS ?> 🚨 Daftar Link Situs Slot Paling Gacor Dan Gampang Menang Malam Hari Ini">
<meta name="twitter:description" content="Temukan situs <?php echo $BRANDS ?> paling sukses dengan panduan kami. Tingkatkan peluang Anda untuk menang dengan permainan slot berperingkat teratas. Jangan lewatkan pembayaran tertinggi dan gameplay termudah. Bergabunglah sekarang dan dominasi malam ini!">


    <script src="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/constants.js?v=58251544750838685771706103266" defer="defer"></script>
    <script src="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/pubsub.js?v=158357773527763999511706103266" defer="defer"></script>
    <script src="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/global.js?v=113367515774722599301706103266" defer="defer"></script><script src="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/animations.js?v=88693664871331136111706103264" defer="defer"></script><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/68535714018/digital_wallets/dialog">
<link rel="alternate" type="application/json+oembed" href="<?php echo $urlPath ?>.oembed">
<script async="async" src="/checkouts/internal/preloads.js?permanent-domain=dd1a60-4.myshopify.com&locale=en-ID"></script>
<script id="shopify-features" type="application/json">{"accessToken":"424f848ac96ab93fbd5a381135c09a84","betas":["rich-media-storefront-analytics"],"domain":"slot-anti-boncos.myshopify.com","predictiveSearch":true,"shopId":68535714018,"smart_payment_buttons_url":"https:\/\/slot-anti-boncos.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/slot-anti-boncos.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en","optimusEnabled":true,"optimusHidden":false,"shopPromiseVariantForOptimusEnabled":false}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "dd1a60-4.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {"active":"IDR","rate":"1.0"};
Shopify.country = "ID";
Shopify.theme = {"name":"Ride","id":139446747362,"theme_store_id":1500,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "slot-anti-boncos.myshopify.com/cdn";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "/";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script id="__st">var __st={"a":68535714018,"offset":25200,"reqid":"edf6c837-a0e8-4c24-a707-54381cbfab2a","pageurl":"slot-anti-boncos.myshopify.com\/products\/slot-online","u":"a16be69aaaf4","p":"product","rtyp":"product","rid":8280361861346};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>!function(o){o.addEventListener("DOMContentLoaded",function(){window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"};var t=['form[action*="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]','form[action*="/account"] input[name="form_type"][value="customer_login"]','form[action*="/account"] input[name="form_type"][value="recover_customer_password"]','form[action*="/account"] input[name="form_type"][value="create_customer"]','form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");function n(e){e=e.target;null==e||null!=(e=function e(t,n){if(null==t.parentElement)return null;if("FORM"!=t.parentElement.tagName)return e(t.parentElement,n);for(var o=t.parentElement.action,r=0;r<n.length;r++)if(-1!==o.indexOf(n[r]))return t.parentElement;return null}(e,["/contact","/comments","/account"]))&&null!=e.querySelector(t)&&((e=o.createElement("script")).setAttribute("src","https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"),o.body.appendChild(e),o.removeEventListener("focus",n,!0),o.removeEventListener("change",n,!0),o.removeEventListener("click",n,!0))}o.addEventListener("click",n,!0),o.addEventListener("change",n,!0),o.addEventListener("focus",n,!0)})}(document);</script>
<script integrity="sha256-h4dvokWvGcvRSqiG7VnGqoonxF0k3NeoHPLSMjUGIz4=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//slot-anti-boncos.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/load_feature-87876fa245af19cbd14aa886ed59c6aa8a27c45d24dcd7a81cf2d2323506233e.js" crossorigin="anonymous"></script>
<script data-source-attribution="shopify.dynamic_checkout.dynamic.init">var Shopify=Shopify||{};Shopify.PaymentButton=Shopify.PaymentButton||{isStorefrontPortableWallets:!0,init:function(){window.Shopify.PaymentButton.init=function(){};var t=document.createElement("script");t.src="https://slot-anti-boncos.myshopify.com/cdn/shopifycloud/portable-wallets/latest/portable-wallets.en.js",t.type="module",document.head.appendChild(t)}};
</script>
<script integrity="sha256-HAs5a9TQVLlKuuHrahvWuke+s1UlxXohfHeoYv8G2D8=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="//slot-anti-boncos.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/features-1c0b396bd4d054b94abae1eb6a1bd6ba47beb35525c57a217c77a862ff06d83f.js" crossorigin="anonymous"></script>
<script id="sections-script" data-sections="header" defer="defer" src="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/compiled_assets/scripts.js?18"></script>

<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>


    <style data-shopify>
      @font-face {
  font-family: "Avenir Next";
  font-weight: 500;
  font-style: normal;
  font-display: swap;
  src: url("//slot-anti-boncos.myshopify.com/cdn/fonts/avenir_next/avenirnext_n5.972a96b7a049f12c89d6d1cd0e1b6c9211f7ba14.woff2?h1=ZGQxYTYwLTQuYWNjb3VudC5teXNob3BpZnkuY29t&h2=c2xvdC1hbnRpLWJvbmNvcy5teXNob3BpZnkuY29t&hmac=bad3ad6bad9193a36965e53a93179532de7477631a58b46bf7b846e7e6adc7e3") format("woff2"),
       url("//slot-anti-boncos.myshopify.com/cdn/fonts/avenir_next/avenirnext_n5.9e88d20fa9eb66ba268ac60ab013006ef69a310a.woff?h1=ZGQxYTYwLTQuYWNjb3VudC5teXNob3BpZnkuY29t&h2=c2xvdC1hbnRpLWJvbmNvcy5teXNob3BpZnkuY29t&hmac=e6d2924a73b9f201b60f32fc8ed85658214c7200f8e18289623138754caf3b57") format("woff");
}

      @font-face {
  font-family: "Avenir Next";
  font-weight: 700;
  font-style: normal;
  font-display: swap;
  src: url("//slot-anti-boncos.myshopify.com/cdn/fonts/avenir_next/avenirnext_n7.8cfc646eab1e39e2d81a26284624600ccae49d55.woff2?h1=ZGQxYTYwLTQuYWNjb3VudC5teXNob3BpZnkuY29t&h2=c2xvdC1hbnRpLWJvbmNvcy5teXNob3BpZnkuY29t&hmac=12fceac33757df279c6748aa4c106da5f72feeb19d5e469eebf747012c92e10f") format("woff2"),
       url("//slot-anti-boncos.myshopify.com/cdn/fonts/avenir_next/avenirnext_n7.25b10f8089bc87dfd8e50a7c68b433da7a04bc87.woff?h1=ZGQxYTYwLTQuYWNjb3VudC5teXNob3BpZnkuY29t&h2=c2xvdC1hbnRpLWJvbmNvcy5teXNob3BpZnkuY29t&hmac=2542dc7abb221b49f3bcb231cb7bdcb506a1602771e886414c368bc4616c3fee") format("woff");
}

      @font-face {
  font-family: "Avenir Next";
  font-weight: 500;
  font-style: italic;
  font-display: swap;
  src: url("//slot-anti-boncos.myshopify.com/cdn/fonts/avenir_next/avenirnext_i5.2d1a6d537e5b485482d6bcca34a56cc10d441a55.woff2?h1=ZGQxYTYwLTQuYWNjb3VudC5teXNob3BpZnkuY29t&h2=c2xvdC1hbnRpLWJvbmNvcy5teXNob3BpZnkuY29t&hmac=4fb05e991e952b2692a44d95a81b306c676661980c84ce3fff4bfeae43e76e45") format("woff2"),
       url("//slot-anti-boncos.myshopify.com/cdn/fonts/avenir_next/avenirnext_i5.fcfa37c68ca483c41031623bfae4701d99bb4b95.woff?h1=ZGQxYTYwLTQuYWNjb3VudC5teXNob3BpZnkuY29t&h2=c2xvdC1hbnRpLWJvbmNvcy5teXNob3BpZnkuY29t&hmac=f665c5829534c760679b4180e113940bc2b559ba6b8b63b304dc3ed932a5bd6c") format("woff");
}

      @font-face {
  font-family: "Avenir Next";
  font-weight: 700;
  font-style: italic;
  font-display: swap;
  src: url("//slot-anti-boncos.myshopify.com/cdn/fonts/avenir_next/avenirnext_i7.3a67996166b5b7f1b7cc3b35490ebd6824908dc5.woff2?h1=ZGQxYTYwLTQuYWNjb3VudC5teXNob3BpZnkuY29t&h2=c2xvdC1hbnRpLWJvbmNvcy5teXNob3BpZnkuY29t&hmac=c57d03be7e05877bfecc1fcbd96dbcc7fa1e3b29b32651df975d614d4c4fa6f1") format("woff2"),
       url("//slot-anti-boncos.myshopify.com/cdn/fonts/avenir_next/avenirnext_i7.b872875ff437f0efb4c2321d0016eaa726b649ae.woff?h1=ZGQxYTYwLTQuYWNjb3VudC5teXNob3BpZnkuY29t&h2=c2xvdC1hbnRpLWJvbmNvcy5teXNob3BpZnkuY29t&hmac=96781079164a8aaea3fd54f31dc26860787ce1f1a3951e1fa8680631b7d0b7cc") format("woff");
}

      @font-face {
  font-family: Oswald;
  font-weight: 500;
  font-style: normal;
  font-display: swap;
  src: url("//slot-anti-boncos.myshopify.com/cdn/fonts/oswald/oswald_n5.22b74dce86cb1e4738ccceb326c9284bc24641e9.woff2?h1=ZGQxYTYwLTQuYWNjb3VudC5teXNob3BpZnkuY29t&h2=c2xvdC1hbnRpLWJvbmNvcy5teXNob3BpZnkuY29t&hmac=6faa96f6b09321bac136b7489661a49eb12269580cd6f6a25b9c2c44ddb7ef6e") format("woff2"),
       url("//slot-anti-boncos.myshopify.com/cdn/fonts/oswald/oswald_n5.c60897f79173105d5bae1e28e68e9326a4a64631.woff?h1=ZGQxYTYwLTQuYWNjb3VudC5teXNob3BpZnkuY29t&h2=c2xvdC1hbnRpLWJvbmNvcy5teXNob3BpZnkuY29t&hmac=55dfe1c579049aa888b3a554c51cbda9f99d82362780004afcea09b0638dd68b") format("woff");
}


      
        :root,
        .color-background-1 {
          --color-background: 31,31,33;
        
          --gradient-background: #1f1f21;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 43,43,46;
        --color-shadow: 255,255,255;
        --color-button: 193,0,8;
        --color-button-text: 255,255,255;
        --color-secondary-button: 31,31,33;
        --color-secondary-button-text: 193,0,8;
        --color-link: 193,0,8;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 31,31,33;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(31 31 33);
      }
      
        
        .color-background-2 {
          --color-background: 31,31,33;
        
          --gradient-background: #1f1f21;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 43,43,46;
        --color-shadow: 255,255,255;
        --color-button: 255,255,255;
        --color-button-text: 31,31,33;
        --color-secondary-button: 31,31,33;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 31,31,33;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(31 31 33);
      }
      
        
        .color-inverse {
          --color-background: 57,57,57;
        
          --gradient-background: #393939;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 70,70,70;
        --color-shadow: 255,255,255;
        --color-button: 255,255,255;
        --color-button-text: 0,0,0;
        --color-secondary-button: 57,57,57;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 57,57,57;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(57 57 57);
      }
      
        
        .color-accent-1 {
          --color-background: 193,0,8;
        
          --gradient-background: #c10008;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 219,0,9;
        --color-shadow: 31,31,33;
        --color-button: 255,255,255;
        --color-button-text: 193,0,8;
        --color-secondary-button: 193,0,8;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 193,0,8;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(193 0 8);
      }
      
        
        .color-accent-2 {
          --color-background: 0,252,237;
        
          --gradient-background: #00fced;
        

        

        --color-foreground: 31,31,33;
        --color-background-contrast: 0,125,117;
        --color-shadow: 255,255,255;
        --color-button: 31,31,33;
        --color-button-text: 0,252,237;
        --color-secondary-button: 0,252,237;
        --color-secondary-button-text: 31,31,33;
        --color-link: 31,31,33;
        --color-badge-foreground: 31,31,33;
        --color-badge-background: 0,252,237;
        --color-badge-border: 31,31,33;
        --payment-terms-background-color: rgb(0 252 237);
      }
      

      body, .color-background-1, .color-background-2, .color-inverse, .color-accent-1, .color-accent-2 {
        color: rgba(var(--color-foreground), 0.75);
        background-color: rgb(var(--color-background));
      }

      :root {
        --font-body-family: "Avenir Next", sans-serif;
        --font-body-style: normal;
        --font-body-weight: 500;
        --font-body-weight-bold: 800;

        --font-heading-family: Oswald, sans-serif;
        --font-heading-style: normal;
        --font-heading-weight: 500;

        --font-body-scale: 1.0;
        --font-heading-scale: 1.4;

        --media-padding: px;
        --media-border-opacity: 0.1;
        --media-border-width: 0px;
        --media-radius: 0px;
        --media-shadow-opacity: 0.0;
        --media-shadow-horizontal-offset: 0px;
        --media-shadow-vertical-offset: 4px;
        --media-shadow-blur-radius: 5px;
        --media-shadow-visible: 0;

        --page-width: 160rem;
        --page-width-margin: 0rem;

        --product-card-image-padding: 0.0rem;
        --product-card-corner-radius: 0.0rem;
        --product-card-text-alignment: left;
        --product-card-border-width: 0.0rem;
        --product-card-border-opacity: 0.1;
        --product-card-shadow-opacity: 0.0;
        --product-card-shadow-visible: 0;
        --product-card-shadow-horizontal-offset: 0.0rem;
        --product-card-shadow-vertical-offset: 0.4rem;
        --product-card-shadow-blur-radius: 0.5rem;

        --collection-card-image-padding: 0.0rem;
        --collection-card-corner-radius: 0.0rem;
        --collection-card-text-alignment: left;
        --collection-card-border-width: 0.0rem;
        --collection-card-border-opacity: 0.1;
        --collection-card-shadow-opacity: 0.0;
        --collection-card-shadow-visible: 0;
        --collection-card-shadow-horizontal-offset: 0.0rem;
        --collection-card-shadow-vertical-offset: 0.4rem;
        --collection-card-shadow-blur-radius: 0.5rem;

        --blog-card-image-padding: 0.0rem;
        --blog-card-corner-radius: 0.0rem;
        --blog-card-text-alignment: left;
        --blog-card-border-width: 0.0rem;
        --blog-card-border-opacity: 0.1;
        --blog-card-shadow-opacity: 0.0;
        --blog-card-shadow-visible: 0;
        --blog-card-shadow-horizontal-offset: 0.0rem;
        --blog-card-shadow-vertical-offset: 0.4rem;
        --blog-card-shadow-blur-radius: 0.5rem;

        --badge-corner-radius: 4.0rem;

        --popup-border-width: 1px;
        --popup-border-opacity: 0.1;
        --popup-corner-radius: 0px;
        --popup-shadow-opacity: 0.0;
        --popup-shadow-horizontal-offset: 0px;
        --popup-shadow-vertical-offset: 4px;
        --popup-shadow-blur-radius: 5px;

        --drawer-border-width: 1px;
        --drawer-border-opacity: 0.1;
        --drawer-shadow-opacity: 0.0;
        --drawer-shadow-horizontal-offset: 0px;
        --drawer-shadow-vertical-offset: 4px;
        --drawer-shadow-blur-radius: 5px;

        --spacing-sections-desktop: 52px;
        --spacing-sections-mobile: 36px;

        --grid-desktop-vertical-spacing: 40px;
        --grid-desktop-horizontal-spacing: 40px;
        --grid-mobile-vertical-spacing: 20px;
        --grid-mobile-horizontal-spacing: 20px;

        --text-boxes-border-opacity: 0.1;
        --text-boxes-border-width: 0px;
        --text-boxes-radius: 0px;
        --text-boxes-shadow-opacity: 0.0;
        --text-boxes-shadow-visible: 0;
        --text-boxes-shadow-horizontal-offset: 0px;
        --text-boxes-shadow-vertical-offset: 4px;
        --text-boxes-shadow-blur-radius: 5px;

        --buttons-radius: 0px;
        --buttons-radius-outset: 0px;
        --buttons-border-width: 1px;
        --buttons-border-opacity: 1.0;
        --buttons-shadow-opacity: 0.0;
        --buttons-shadow-visible: 0;
        --buttons-shadow-horizontal-offset: 0px;
        --buttons-shadow-vertical-offset: 4px;
        --buttons-shadow-blur-radius: 5px;
        --buttons-border-offset: 0px;

        --inputs-radius: 0px;
        --inputs-border-width: 1px;
        --inputs-border-opacity: 0.55;
        --inputs-shadow-opacity: 0.0;
        --inputs-shadow-horizontal-offset: 0px;
        --inputs-margin-offset: 0px;
        --inputs-shadow-vertical-offset: 4px;
        --inputs-shadow-blur-radius: 5px;
        --inputs-radius-outset: 0px;

        --variant-pills-radius: 40px;
        --variant-pills-border-width: 1px;
        --variant-pills-border-opacity: 0.55;
        --variant-pills-shadow-opacity: 0.0;
        --variant-pills-shadow-horizontal-offset: 0px;
        --variant-pills-shadow-vertical-offset: 4px;
        --variant-pills-shadow-blur-radius: 5px;
      }

      *,
      *::before,
      *::after {
        box-sizing: inherit;
      }

      html {
        box-sizing: border-box;
        font-size: calc(var(--font-body-scale) * 62.5%);
        height: 100%;
      }

      body {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        grid-template-columns: 100%;
        min-height: 100%;
        margin: 0;
        font-size: 1.5rem;
        letter-spacing: 0.06rem;
        line-height: calc(1 + 0.8 / var(--font-body-scale));
        font-family: var(--font-body-family);
        font-style: var(--font-body-style);
        font-weight: var(--font-body-weight);
      }

      @media screen and (min-width: 750px) {
        body {
          font-size: 1.6rem;
        }
      }
    </style>

    <link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/base.css?v=127867003511637661291706103264" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="font" href="//slot-anti-boncos.myshopify.com/cdn/fonts/avenir_next/avenirnext_n5.972a96b7a049f12c89d6d1cd0e1b6c9211f7ba14.woff2?h1=ZGQxYTYwLTQuYWNjb3VudC5teXNob3BpZnkuY29t&h2=c2xvdC1hbnRpLWJvbmNvcy5teXNob3BpZnkuY29t&hmac=bad3ad6bad9193a36965e53a93179532de7477631a58b46bf7b846e7e6adc7e3" type="font/woff2" crossorigin><link rel="preload" as="font" href="//slot-anti-boncos.myshopify.com/cdn/fonts/oswald/oswald_n5.22b74dce86cb1e4738ccceb326c9284bc24641e9.woff2?h1=ZGQxYTYwLTQuYWNjb3VudC5teXNob3BpZnkuY29t&h2=c2xvdC1hbnRpLWJvbmNvcy5teXNob3BpZnkuY29t&hmac=6faa96f6b09321bac136b7489661a49eb12269580cd6f6a25b9c2c44ddb7ef6e" type="font/woff2" crossorigin><link
        rel="stylesheet"
        href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-predictive-search.css?v=118923337488134913561706103265"
        media="print"
        onload="this.media='all'"
      ><script>
      document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
      if (Shopify.designMode) {
        document.documentElement.classList.add('shopify-design-mode');
      }
    </script>
  <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 68535714018,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "product"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script id="web-pixels-manager-setup">(function e(e,n,a,t,r){var o="function"==typeof BigInt&&-1!==BigInt.toString().indexOf("[native code]")?"modern":"legacy";window.Shopify=window.Shopify||{};var i=window.Shopify;i.analytics=i.analytics||{};var s=i.analytics;s.replayQueue=[],s.publish=function(e,n,a){return s.replayQueue.push([e,n,a]),!0};try{self.performance.mark("wpm:start")}catch(e){}var l=[a,"/wpm","/b",r,o.substring(0,1),".js"].join("");!function(e){var n=e.src,a=e.async,t=void 0===a||a,r=e.onload,o=e.onerror,i=document.createElement("script"),s=document.head,l=document.body;i.async=t,i.src=n,r&&i.addEventListener("load",r),o&&i.addEventListener("error",o),s?s.appendChild(i):l?l.appendChild(i):console.error("Did not find a head or body element to append the script")}({src:l,async:!0,onload:function(){var a=window.webPixelsManager.init(e);n(a);var t=window.Shopify.analytics;t.replayQueue.forEach((function(e){var n=e[0],t=e[1],r=e[2];a.publishCustomEvent(n,t,r)})),t.replayQueue=[],t.publish=a.publishCustomEvent,t.visitor=a.visitor},onerror:function(){var n=e.storefrontBaseUrl.replace(/\/$/,""),a="".concat(n,"/.well-known/shopify/monorail/unstable/produce_batch"),r=JSON.stringify({metadata:{event_sent_at_ms:(new Date).getTime()},events:[{schema_id:"web_pixels_manager_load/2.0",payload:{version:t||"latest",page_url:self.location.href,status:"failed",error_msg:"".concat(l," has failed to load")},metadata:{event_created_at_ms:(new Date).getTime()}}]});try{if(self.navigator.sendBeacon.bind(self.navigator)(a,r))return!0}catch(e){}var o=new XMLHttpRequest;try{return o.open("POST",a,!0),o.setRequestHeader("Content-Type","text/plain"),o.send(r),!0}catch(e){console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")}return!1}})})({shopId: 68535714018,storefrontBaseUrl: "https://slot-anti-boncos.myshopify.com",cdnBaseUrl: "https://slot-anti-boncos.myshopify.com/cdn",surface: "storefront-renderer",enabledBetaFlags: ["web_pixels_async_pixel_refactor","web_pixels_manager_performance_improvement"],webPixelsConfigList: [{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"0575","apiClientId":"shopify-pixel","type":"APP","purposes":["ANALYTICS"]},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"0575","apiClientId":"shopify-pixel","type":"CUSTOM","purposes":["ANALYTICS"]}],initData: {"cart":null,"checkout":null,"customer":null,"productVariants":[{"id":"44745773220066","image":{"src":"\/\/slot-anti-boncos.myshopify.com\/cdn\/shop\/files\/SLOTONLINE.jpg?v=1706189347"},"price":{"amount":10000.0,"currencyCode":"IDR"},"product":{"id":"8280361861346","title":"<?php echo $BRANDS ?> \ud83d\udea8 Daftar Link Situs Slot Paling Gacor Dan Gampang Menang Malam Hari Ini","untranslatedTitle":"<?php echo $BRANDS ?> \ud83d\udea8 Daftar Link Situs Slot Paling Gacor Dan Gampang Menang Malam Hari Ini","url":"\/products\/slot-online","vendor":"<?php echo $BRANDS ?>","type":"<?php echo $BRANDS ?>"},"sku":"","title":"Default Title","untranslatedTitle":"Default Title"}]},},function pageEvents(webPixelsManagerAPI) {webPixelsManagerAPI.publish("page_viewed");webPixelsManagerAPI.publish("product_viewed", {"productVariant":{"id":"44745773220066","image":{"src":"\/\/slot-anti-boncos.myshopify.com\/cdn\/shop\/files\/SLOTONLINE.jpg?v=1706189347"},"price":{"amount":10000.0,"currencyCode":"IDR"},"product":{"id":"8280361861346","title":"<?php echo $BRANDS ?> \ud83d\udea8 Daftar Link Situs Slot Paling Gacor Dan Gampang Menang Malam Hari Ini","untranslatedTitle":"<?php echo $BRANDS ?> \ud83d\udea8 Daftar Link Situs Slot Paling Gacor Dan Gampang Menang Malam Hari Ini","url":"\/products\/slot-online","vendor":"<?php echo $BRANDS ?>","type":"<?php echo $BRANDS ?>"},"sku":"","title":"Default Title","untranslatedTitle":"Default Title"}});},"https://slot-anti-boncos.myshopify.com/cdn","0.0.421","3c0b1769wc1f578dfp245c945cmc18b238d",);</script>  <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'IDR';
var meta = {"product":{"id":8280361861346,"gid":"gid:\/\/shopify\/Product\/8280361861346","vendor":"<?php echo $BRANDS ?>","type":"<?php echo $BRANDS ?>","variants":[{"id":44745773220066,"price":1000000,"name":"<?php echo $BRANDS ?> 🚨 Daftar Link Situs Slot Paling Gacor Dan Gampang Menang Malam Hari Ini","public_title":null,"sku":""}]},"page":{"pageType":"product","resourceType":"product","resourceId":8280361861346}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
    var customDocumentWrite = function(content) {
      var jquery = null;

      if (window.jQuery) {
        jquery = window.jQuery;
      } else if (window.Checkout && window.Checkout.$) {
        jquery = window.Checkout.$;
      }

      if (jquery) {
        jquery('body').append(content);
      }
    };

    var hasLoggedConversion = function(token) {
      if (token) {
        return document.cookie.indexOf('loggedConversion=' + token) !== -1;
      }
      return false;
    }

    var setCookieIfConversion = function(token) {
      if (token) {
        var twoMonthsFromNow = new Date(Date.now());
        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

        document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
      }
    }

    var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
    if (trekkie.integrations) {
      return;
    }
    trekkie.methods = [
      'identify',
      'page',
      'ready',
      'track',
      'trackForm',
      'trackLink'
    ];
    trekkie.factory = function(method) {
      return function() {
        var args = Array.prototype.slice.call(arguments);
        args.unshift(method);
        trekkie.push(args);
        return trekkie;
      };
    };
    for (var i = 0; i < trekkie.methods.length; i++) {
      var key = trekkie.methods[i];
      trekkie[key] = trekkie.factory(key);
    }
    trekkie.load = function(config) {
      trekkie.config = config || {};
      trekkie.config.initialDocumentCookie = document.cookie;
      var first = document.getElementsByTagName('script')[0];
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.onerror = function(e) {
        var scriptFallback = document.createElement('script');
        scriptFallback.type = 'text/javascript';
        scriptFallback.onerror = function(error) {
                var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });

          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful

        } // XHR beacon

        var xhr = new XMLHttpRequest();

        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }

        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 68535714018,
      theme_id: 139446747362,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "//slot-anti-boncos.myshopify.com/cdn/s/trekkie.storefront.dbffdcd1045dcd69d6bd74f477a7dc6cba871206.min.js"});

        };
        scriptFallback.async = true;
        scriptFallback.src = '//slot-anti-boncos.myshopify.com/cdn/s/trekkie.storefront.dbffdcd1045dcd69d6bd74f477a7dc6cba871206.min.js';
        first.parentNode.insertBefore(scriptFallback, first);
      };
      script.async = true;
      script.src = '//slot-anti-boncos.myshopify.com/cdn/s/trekkie.storefront.dbffdcd1045dcd69d6bd74f477a7dc6cba871206.min.js';
      first.parentNode.insertBefore(script, first);
    };
    trekkie.load(
      {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":68535714018,"isMerchantRequest":null,"themeId":139446747362,"themeCityHash":"13091959727226322529","contentLanguage":"en","currency":"IDR"},"isServerSideCookieWritingEnabled":true,"monorailRegion":"shop_domain"},"Session Attribution":{},"S2S":{"facebookCapiEnabled":false,"source":"trekkie-storefront-renderer"}}
    );

    var loaded = false;
    trekkie.ready(function() {
      if (loaded) return;
      loaded = true;

      window.ShopifyAnalytics.lib = window.trekkie;

  
      var originalDocumentWrite = document.write;
      document.write = customDocumentWrite;
      try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
      document.write = originalDocumentWrite;

      window.ShopifyAnalytics.lib.page(null,{"pageType":"product","resourceType":"product","resourceId":8280361861346});

      var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
      var token = match? match[1]: undefined;
      if (!hasLoggedConversion(token)) {
        setCookieIfConversion(token);
        window.ShopifyAnalytics.lib.track("Viewed Product",{"currency":"IDR","variantId":44745773220066,"productId":8280361861346,"productGid":"gid:\/\/shopify\/Product\/8280361861346","name":"<?php echo $BRANDS ?> 🚨 Daftar Link Situs Slot Paling Gacor Dan Gampang Menang Malam Hari Ini","price":"10000.00","sku":"","brand":"<?php echo $BRANDS ?>","variant":null,"category":"<?php echo $BRANDS ?>","nonInteraction":true});
      window.ShopifyAnalytics.lib.track("monorail:\/\/trekkie_storefront_viewed_product\/1.1",{"currency":"IDR","variantId":44745773220066,"productId":8280361861346,"productGid":"gid:\/\/shopify\/Product\/8280361861346","name":"<?php echo $BRANDS ?> 🚨 Daftar Link Situs Slot Paling Gacor Dan Gampang Menang Malam Hari Ini","price":"10000.00","sku":"","brand":"<?php echo $BRANDS ?>","variant":null,"category":"<?php echo $BRANDS ?>","nonInteraction":true,"referer":"https:\/\/slot-anti-boncos.myshopify.com\/products\/slot-online"});
      }
    });


        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src = "//slot-anti-boncos.myshopify.com/cdn/shopifycloud/shopify/assets/shop_events_listener-a7c63dba65ccddc484f77541dc8ca437e60e1e9e297fe1c3faebf6523a0ede9b.js";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

})();</script>
<script class="boomerang">
(function () {
  if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
    return;
  }
  window.BOOMR = window.BOOMR || {};
  window.BOOMR.snippetStart = new Date().getTime();
  window.BOOMR.snippetExecuted = true;
  window.BOOMR.snippetVersion = 12;
  window.BOOMR.application = "storefront-renderer";
  window.BOOMR.themeName = "Ride";
  window.BOOMR.themeVersion = "12.0.0";
  window.BOOMR.shopId = 68535714018;
  window.BOOMR.themeId = 139446747362;
  window.BOOMR.renderRegion = "gcp-asia-southeast1";
  window.BOOMR.url =
    "https://slot-anti-boncos.myshopify.com/cdn/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
  var where = document.currentScript || document.getElementsByTagName("script")[0];
  var parentNode = where.parentNode;
  var promoted = false;
  var LOADER_TIMEOUT = 3000;
  function promote() {
    if (promoted) {
      return;
    }
    var script = document.createElement("script");
    script.id = "boomr-scr-as";
    script.src = window.BOOMR.url;
    script.async = true;
    parentNode.appendChild(script);
    promoted = true;
  }
  function iframeLoader(wasFallback) {
    promoted = true;
    var dom, bootstrap, iframe, iframeStyle;
    var doc = document;
    var win = window;
    window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
    bootstrap = function(parent, scriptId) {
      var script = doc.createElement("script");
      script.id = scriptId || "boomr-if-as";
      script.src = window.BOOMR.url;
      BOOMR_lstart = new Date().getTime();
      parent = parent || doc.body;
      parent.appendChild(script);
    };
    if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
      window.BOOMR.snippetMethod = "s";
      bootstrap(parentNode, "boomr-async");
      return;
    }
    iframe = document.createElement("IFRAME");
    iframe.src = "about:blank";
    iframe.title = "";
    iframe.role = "presentation";
    iframe.loading = "eager";
    iframeStyle = (iframe.frameElement || iframe).style;
    iframeStyle.width = 0;
    iframeStyle.height = 0;
    iframeStyle.border = 0;
    iframeStyle.display = "none";
    parentNode.appendChild(iframe);
    try {
      win = iframe.contentWindow;
      doc = win.document.open();
    } catch (e) {
      dom = document.domain;
      iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
      win = iframe.contentWindow;
      doc = win.document.open();
    }
    if (dom) {
      doc._boomrl = function() {
        this.domain = dom;
        bootstrap();
      };
      doc.write("<body onload='document._boomrl();'>");
    } else {
      win._boomrl = function() {
        bootstrap();
      };
      if (win.addEventListener) {
        win.addEventListener("load", win._boomrl, false);
      } else if (win.attachEvent) {
        win.attachEvent("onload", win._boomrl);
      }
    }
    doc.close();
  }
  var link = document.createElement("link");
  if (link.relList &&
    typeof link.relList.supports === "function" &&
    link.relList.supports("preload") &&
    ("as" in link)) {
    window.BOOMR.snippetMethod = "p";
    link.href = window.BOOMR.url;
    link.rel = "preload";
    link.as = "script";
    link.addEventListener("load", promote);
    link.addEventListener("error", function() {
      iframeLoader(true);
    });
    setTimeout(function() {
      if (!promoted) {
        iframeLoader(true);
      }
    }, LOADER_TIMEOUT);
    BOOMR_lstart = new Date().getTime();
    parentNode.appendChild(link);
  } else {
    iframeLoader(false);
  }
  function boomerangSaveLoadTime(e) {
    window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
  }
  if (window.addEventListener) {
    window.addEventListener("load", boomerangSaveLoadTime, false);
  } else if (window.attachEvent) {
    window.attachEvent("onload", boomerangSaveLoadTime);
  }
  if (document.addEventListener) {
    document.addEventListener("onBoomerangLoaded", function(e) {
      e.detail.BOOMR.init({
        ResourceTiming: {
          enabled: true,
          trackedResourceTypes: ["script", "img", "css"]
        },
      });
      e.detail.BOOMR.t_end = new Date().getTime();
    });
  } else if (document.attachEvent) {
    document.attachEvent("onpropertychange", function(e) {
      if (!e) e=event;
      if (e.propertyName === "onBoomerangLoaded") {
        e.detail.BOOMR.init({
          ResourceTiming: {
            enabled: true,
            trackedResourceTypes: ["script", "img", "css"]
          },
        });
        e.detail.BOOMR.t_end = new Date().getTime();
      }
    });
  }
})();</script>
</head>

  <body class="gradient">
    <a class="skip-to-content-link button visually-hidden" href="#MainContent">
      Skip to content
    </a><!-- BEGIN sections: header-group -->
<div id="shopify-section-sections--17282701066466__announcement-bar" class="shopify-section shopify-section-group-header-group announcement-bar-section"><link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-slideshow.css?v=107725913939919748051706103265" rel="stylesheet" type="text/css" media="all" />
<link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-slider.css?v=142503135496229589681706103265" rel="stylesheet" type="text/css" media="all" />


<div
  class="utility-bar color-accent-1 gradient utility-bar--bottom-border"
  
>
  <div class="page-width utility-bar__grid"><div
        class="announcement-bar"
        role="region"
        aria-label="Announcement"
        
      ><a
              href="https://kontolkuda.pages.dev/uho/"
              class="announcement-bar__link link link--text focus-inset animate-arrow"
            ><p class="announcement-bar__message h5">
            <span>🚨SELAMAT DATANG DI SITUS SLOT PALING GACOR #1</span><svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>

</p></a></div><div class="localization-wrapper">
</div>
  </div>
</div>


</div><div id="shopify-section-sections--17282701066466__header" class="shopify-section shopify-section-group-header-group section-header"><link rel="stylesheet" href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-list-menu.css?v=151968516119678728991706103265" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-search.css?v=165164710990765432851706103265" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-menu-drawer.css?v=31331429079022630271706103265" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-cart-notification.css?v=54116361853792938221706103265" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-cart-items.css?v=145340746371385151771706103265" media="print" onload="this.media='all'"><link rel="stylesheet" href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-price.css?v=70172745017360139101706103265" media="print" onload="this.media='all'"><noscript><link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-list-menu.css?v=151968516119678728991706103265" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-search.css?v=165164710990765432851706103265" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-menu-drawer.css?v=31331429079022630271706103265" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-cart-notification.css?v=54116361853792938221706103265" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-cart-items.css?v=145340746371385151771706103265" rel="stylesheet" type="text/css" media="all" /></noscript>

<style>
  header-drawer {
    justify-self: start;
    margin-left: -1.2rem;
  }@media screen and (min-width: 990px) {
      header-drawer {
        display: none;
      }
    }.menu-drawer-container {
    display: flex;
  }

  .list-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .list-menu--inline {
    display: inline-flex;
    flex-wrap: wrap;
  }

  summary.list-menu__item {
    padding-right: 2.7rem;
  }

  .list-menu__item {
    display: flex;
    align-items: center;
    line-height: calc(1 + 0.3 / var(--font-body-scale));
  }

  .list-menu__item--link {
    text-decoration: none;
    padding-bottom: 1rem;
    padding-top: 1rem;
    line-height: calc(1 + 0.8 / var(--font-body-scale));
  }

  @media screen and (min-width: 750px) {
    .list-menu__item--link {
      padding-bottom: 0.5rem;
      padding-top: 0.5rem;
    }
  }
</style><style data-shopify>.header {
    padding: 10px 3rem 10px 3rem;
  }

  .section-header {
    position: sticky; /* This is for fixing a Safari z-index issue. PR #2147 */
    margin-bottom: 0px;
  }

  @media screen and (min-width: 750px) {
    .section-header {
      margin-bottom: 0px;
    }
  }

  @media screen and (min-width: 990px) {
    .header {
      padding-top: 20px;
      padding-bottom: 20px;
    }
  }</style><script src="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/details-disclosure.js?v=13653116266235556501706103266" defer="defer"></script>
<script src="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/details-modal.js?v=25581673532751508451706103266" defer="defer"></script>
<script src="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/cart-notification.js?v=133508293167896966491706103264" defer="defer"></script>
<script src="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/search-form.js?v=133129549252120666541706103266" defer="defer"></script><svg xmlns="http://www.w3.org/2000/svg" class="hidden">
  <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z" fill="currentColor"/>
  </symbol>

  <symbol id="icon-reset" class="icon icon-close"  fill="none" viewBox="0 0 18 18" stroke="currentColor">
    <circle r="8.5" cy="9" cx="9" stroke-opacity="0.2"/>
    <path d="M6.82972 6.82915L1.17193 1.17097" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
    <path d="M1.22896 6.88502L6.77288 1.11523" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
  </symbol>

  <symbol id="icon-close" class="icon icon-close" fill="none" viewBox="0 0 18 17">
    <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
  </symbol>
</svg><sticky-header data-sticky-type="on-scroll-up" class="header-wrapper color-inverse gradient"><header class="header header--middle-center header--mobile-center page-width">

<details-modal class="header__search">
  <details>
    <summary
      class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle"
      aria-haspopup="dialog"
      aria-label="Search"
    >
      <span>
        <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
          <use href="#icon-search">
        </svg>
        <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
          <use href="#icon-close">
        </svg>
      </span>
    </summary>
    <div
      class="search-modal modal__content gradient"
      role="dialog"
      aria-modal="true"
      aria-label="Search"
    >
      <div class="modal-overlay"></div>
      <div
        class="search-modal__content search-modal__content-bottom"
        tabindex="-1"
      ><predictive-search class="search-modal__form" data-loading-text="Loading..."><form action="/search" method="get" role="search" class="search search-modal__form">
          <div class="field">
            <input
              class="search__input field__input"
              id="Search-In-Modal-1"
              type="search"
              name="q"
              value=""
              placeholder="Search"role="combobox"
                aria-expanded="false"
                aria-owns="predictive-search-results"
                aria-controls="predictive-search-results"
                aria-haspopup="listbox"
                aria-autocomplete="list"
                autocorrect="off"
                autocomplete="off"
                autocapitalize="off"
                spellcheck="false">
            <label class="field__label" for="Search-In-Modal-1">Search</label>
            <input type="hidden" name="options[prefix]" value="last">
            <button
              type="reset"
              class="reset__button field__button hidden"
              aria-label="Clear search term"
            >
              <svg class="icon icon-close" aria-hidden="true" focusable="false">
                <use xlink:href="#icon-reset">
              </svg>
            </button>
            <button class="search__button field__button" aria-label="Search">
              <svg class="icon icon-search" aria-hidden="true" focusable="false">
                <use href="#icon-search">
              </svg>
            </button>
          </div><div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>

<link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-loading-spinner.css?v=116724955567955766481706103265" rel="stylesheet" type="text/css" media="all" />

<div class="predictive-search__loading-state">
  <svg
    aria-hidden="true"
    focusable="false"
    class="spinner"
    viewBox="0 0 66 66"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
  </svg>
</div>
</div>

            <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span></form></predictive-search><button
          type="button"
          class="search-modal__close-button modal__close-button link link--text focus-inset"
          aria-label="Close"
        >
          <svg class="icon icon-close" aria-hidden="true" focusable="false">
            <use href="#icon-close">
          </svg>
        </button>
      </div>
    </div>
  </details>
</details-modal>

<a href="<?php echo $urlPath ?>" class="header__heading-link link link--text focus-inset"><div class="header__heading-logo-wrapper">
                
                <img src="//slot-anti-boncos.myshopify.com/cdn/shop/files/GILASLOT88.png?v=1706103885&amp;width=600" alt="<?php echo $BRANDS ?>" srcset="//slot-anti-boncos.myshopify.com/cdn/shop/files/GILASLOT88.png?v=1706103885&amp;width=160 160w, //slot-anti-boncos.myshopify.com/cdn/shop/files/GILASLOT88.png?v=1706103885&amp;width=240 240w, //slot-anti-boncos.myshopify.com/cdn/shop/files/GILASLOT88.png?v=1706103885&amp;width=320 320w" width="160" height="69.375" loading="eager" class="header__heading-logo" sizes="(min-width: 750px) 160px, 50vw">
              </div></a><div class="header__icons header__icons--localization header-localization">
      <div class="desktop-localization-wrapper">
</div>
      

<details-modal class="header__search">
  <details>
    <summary
      class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle"
      aria-haspopup="dialog"
      aria-label="Search"
    >
      <span>
        <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
          <use href="#icon-search">
        </svg>
        <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
          <use href="#icon-close">
        </svg>
      </span>
    </summary>
    <div
      class="search-modal modal__content gradient"
      role="dialog"
      aria-modal="true"
      aria-label="Search"
    >
      <div class="modal-overlay"></div>
      <div
        class="search-modal__content search-modal__content-bottom"
        tabindex="-1"
      ><predictive-search class="search-modal__form" data-loading-text="Loading..."><form action="/search" method="get" role="search" class="search search-modal__form">
          <div class="field">
            <input
              class="search__input field__input"
              id="Search-In-Modal"
              type="search"
              name="q"
              value=""
              placeholder="Search"role="combobox"
                aria-expanded="false"
                aria-owns="predictive-search-results"
                aria-controls="predictive-search-results"
                aria-haspopup="listbox"
                aria-autocomplete="list"
                autocorrect="off"
                autocomplete="off"
                autocapitalize="off"
                spellcheck="false">
            <label class="field__label" for="Search-In-Modal">Search</label>
            <input type="hidden" name="options[prefix]" value="last">
            <button
              type="reset"
              class="reset__button field__button hidden"
              aria-label="Clear search term"
            >
              <svg class="icon icon-close" aria-hidden="true" focusable="false">
                <use xlink:href="#icon-reset">
              </svg>
            </button>
            <button class="search__button field__button" aria-label="Search">
              <svg class="icon icon-search" aria-hidden="true" focusable="false">
                <use href="#icon-search">
              </svg>
            </button>
          </div><div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>

<link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-loading-spinner.css?v=116724955567955766481706103265" rel="stylesheet" type="text/css" media="all" />

<div class="predictive-search__loading-state">
  <svg
    aria-hidden="true"
    focusable="false"
    class="spinner"
    viewBox="0 0 66 66"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
  </svg>
</div>
</div>

            <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span></form></predictive-search><button
          type="button"
          class="search-modal__close-button modal__close-button link link--text focus-inset"
          aria-label="Close"
        >
          <svg class="icon icon-close" aria-hidden="true" focusable="false">
            <use href="#icon-close">
          </svg>
        </button>
      </div>
    </div>
  </details>
</details-modal>

<a href="/cart" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble"><svg
  class="icon icon-cart-empty"
  aria-hidden="true"
  focusable="false"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 40 40"
  fill="none"
>
  <path d="m15.75 11.8h-3.16l-.77 11.6a5 5 0 0 0 4.99 5.34h7.38a5 5 0 0 0 4.99-5.33l-.78-11.61zm0 1h-2.22l-.71 10.67a4 4 0 0 0 3.99 4.27h7.38a4 4 0 0 0 4-4.27l-.72-10.67h-2.22v.63a4.75 4.75 0 1 1 -9.5 0zm8.5 0h-7.5v.63a3.75 3.75 0 1 0 7.5 0z" fill="currentColor" fill-rule="evenodd"/>
</svg>
<span class="visually-hidden">Cart</span></a>
    </div>
  </header>
</sticky-header>

<cart-notification>
  <div class="cart-notification-wrapper page-width">
    <div
      id="cart-notification"
      class="cart-notification focus-inset color-inverse gradient"
      aria-modal="true"
      aria-label="Item added to your cart"
      role="dialog"
      tabindex="-1"
    >
      <div class="cart-notification__header">
        <h2 class="cart-notification__heading caption-large text-body"><svg
  class="icon icon-checkmark"
  aria-hidden="true"
  focusable="false"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 12 9"
  fill="none"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M11.35.643a.5.5 0 01.006.707l-6.77 6.886a.5.5 0 01-.719-.006L.638 4.845a.5.5 0 11.724-.69l2.872 3.011 6.41-6.517a.5.5 0 01.707-.006h-.001z" fill="currentColor"/>
</svg>
Item added to your cart
        </h2>
        <button
          type="button"
          class="cart-notification__close modal__close-button link link--text focus-inset"
          aria-label="Close"
        >
          <svg class="icon icon-close" aria-hidden="true" focusable="false">
            <use href="#icon-close">
          </svg>
        </button>
      </div>
      <div id="cart-notification-product" class="cart-notification-product"></div>
      <div class="cart-notification__links">
        <a
          href="/cart"
          id="cart-notification-button"
          class="button button--secondary button--full-width"
        >View cart</a>
        <form action="/cart" method="post" id="cart-notification-form">
          <button class="button button--primary button--full-width" name="checkout">
            Check out
          </button>
        </form>
        <button type="button" class="link button-label">Continue shopping</button>
      </div>
    </div>
  </div>
</cart-notification>
<style data-shopify>
  .cart-notification {
    display: none;
  }
</style>


<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "<?php echo $BRANDS ?>",
    
      "logo": "https:\/\/slot-anti-boncos.myshopify.com\/cdn\/shop\/files\/GILASLOT88.png?v=1706103885\u0026width=500",
    
    "sameAs": [
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      ""
    ],
    "url": "https:\/\/slot-anti-boncos.myshopify.com"
  }
</script>
</div>
<!-- END sections: header-group -->

    <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
      <section id="shopify-section-template--17282700738786__main" class="shopify-section section"><section
  id="MainProduct-template--17282700738786__main"
  class="section-template--17282700738786__main-padding gradient color-background-1"
  data-section="template--17282700738786__main"
>
  <link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/section-main-product.css?v=141059467971401676601706103267" rel="stylesheet" type="text/css" media="all" />
  <link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-accordion.css?v=180964204318874863811706103265" rel="stylesheet" type="text/css" media="all" />
  <link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-price.css?v=70172745017360139101706103265" rel="stylesheet" type="text/css" media="all" />
  <link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-slider.css?v=142503135496229589681706103265" rel="stylesheet" type="text/css" media="all" />
  <link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-rating.css?v=157771854592137137841706103265" rel="stylesheet" type="text/css" media="all" />
  <link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-deferred-media.css?v=14096082462203297471706103265" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.section-template--17282700738786__main-padding {
      padding-top: 27px;
      padding-bottom: 9px;
    }

    @media screen and (min-width: 750px) {
      .section-template--17282700738786__main-padding {
        padding-top: 36px;
        padding-bottom: 12px;
      }
    }</style><script src="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/product-info.js?v=81873523020508815201706103266" defer="defer"></script>
  <script src="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/product-form.js?v=133081758708377679181706103266" defer="defer"></script>

  <div class="page-width">
    <div class="product product--medium product--left product--thumbnail product--mobile-hide grid grid--1-col grid--2-col-tablet">
    <div class="grid__item product__media-wrapper">
      
<media-gallery
  id="MediaGallery-template--17282700738786__main"
  role="region"
  
    class="product__column-sticky"
  
  aria-label="Gallery Viewer"
  data-desktop-layout="thumbnail"
>
  <div id="GalleryStatus-template--17282700738786__main" class="visually-hidden" role="status"></div>
  <slider-component id="GalleryViewer-template--17282700738786__main" class="slider-mobile-gutter"><a class="skip-to-content-link button visually-hidden quick-add-hidden" href="#ProductInfo-template--17282700738786__main">
        Skip to product information
      </a><ul
      id="Slider-Gallery-template--17282700738786__main"
      class="product__media-list contains-media grid grid--peek list-unstyled slider slider--mobile"
      role="list"
    ><li
            id="Slide-template--17282700738786__main-32818194776290"
            class="product__media-item grid__item slider__slide is-active scroll-trigger animate--fade-in"
            data-media-id="template--17282700738786__main-32818194776290"
          >

<div
  class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height"
  style="--ratio: 1.0; --preview-ratio: 1.0;"
>
  <noscript><div class="product__media media">
        <img src="//slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=1946" alt="" srcset="//slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=246 246w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=493 493w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=600 600w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=713 713w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=823 823w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=990 990w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=1100 1100w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=1206 1206w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=1346 1346w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=1426 1426w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=1646 1646w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=1946 1946w" width="1946" height="1946" sizes="(min-width: 1600px) 825px, (min-width: 990px) calc(55.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
      </div></noscript>

  <modal-opener class="product__modal-opener product__modal-opener--image no-js-hidden" data-modal="#ProductModal-template--17282700738786__main">
    <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true"><svg
  aria-hidden="true"
  focusable="false"
  class="icon icon-plus"
  width="19"
  height="19"
  viewBox="0 0 19 19"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.66724 7.93978C4.66655 7.66364 4.88984 7.43922 5.16598 7.43853L10.6996 7.42464C10.9758 7.42395 11.2002 7.64724 11.2009 7.92339C11.2016 8.19953 10.9783 8.42395 10.7021 8.42464L5.16849 8.43852C4.89235 8.43922 4.66793 8.21592 4.66724 7.93978Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.92576 4.66463C8.2019 4.66394 8.42632 4.88723 8.42702 5.16337L8.4409 10.697C8.44159 10.9732 8.2183 11.1976 7.94215 11.1983C7.66601 11.199 7.44159 10.9757 7.4409 10.6995L7.42702 5.16588C7.42633 4.88974 7.64962 4.66532 7.92576 4.66463Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8324 3.03011C10.1255 0.323296 5.73693 0.323296 3.03011 3.03011C0.323296 5.73693 0.323296 10.1256 3.03011 12.8324C5.73693 15.5392 10.1255 15.5392 12.8324 12.8324C15.5392 10.1256 15.5392 5.73693 12.8324 3.03011ZM2.32301 2.32301C5.42035 -0.774336 10.4421 -0.774336 13.5395 2.32301C16.6101 5.39361 16.6366 10.3556 13.619 13.4588L18.2473 18.0871C18.4426 18.2824 18.4426 18.599 18.2473 18.7943C18.0521 18.9895 17.7355 18.9895 17.5402 18.7943L12.8778 14.1318C9.76383 16.6223 5.20839 16.4249 2.32301 13.5395C-0.774335 10.4421 -0.774335 5.42035 2.32301 2.32301Z" fill="currentColor"/>
</svg>
</span>

<link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-loading-spinner.css?v=116724955567955766481706103265" rel="stylesheet" type="text/css" media="all" />

<div class="loading__spinner hidden">
  <svg
    aria-hidden="true"
    focusable="false"
    class="spinner"
    viewBox="0 0 66 66"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
  </svg>
</div>
<div class="product__media media media--transparent">
      <img src="//slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=1946" alt="" srcset="//slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=246 246w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=493 493w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=600 600w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=713 713w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=823 823w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=990 990w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=1100 1100w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=1206 1206w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=1346 1346w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=1426 1426w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=1646 1646w, //slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&amp;width=1946 1946w" width="1946" height="1946" class="image-magnify-lightbox" sizes="(min-width: 1600px) 825px, (min-width: 990px) calc(55.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
    </div>
    <button class="product__media-toggle quick-add-hidden product__media-zoom-lightbox" type="button" aria-haspopup="dialog" data-media-id="32818194776290">
      <span class="visually-hidden">
        Open media 1 in modal
      </span>
    </button>
  </modal-opener></div>

          </li></ul><div class="slider-buttons no-js-hidden quick-add-hidden small-hide">
        <button
          type="button"
          class="slider-button slider-button--prev"
          name="previous"
          aria-label="Slide left"
        >
          <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

        </button>
        <div class="slider-counter caption">
          <span class="slider-counter--current">1</span>
          <span aria-hidden="true"> / </span>
          <span class="visually-hidden">of</span>
          <span class="slider-counter--total">1</span>
        </div>
        <button
          type="button"
          class="slider-button slider-button--next"
          name="next"
          aria-label="Slide right"
        >
          <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

        </button>
      </div></slider-component></media-gallery>

    </div>
    <div class="product__info-wrapper grid__item scroll-trigger animate--slide-in">
      <product-info
        id="ProductInfo-template--17282700738786__main"
        data-section="template--17282700738786__main"
        data-url="/products/slot-online"
        class="product__info-container product__column-sticky"
      ><p
                class="product__text inline-richtext caption-with-letter-spacing"
                
              ><?php echo $BRANDS ?></p><div class="product__title" >
                <h1><?php echo $BRANDS ?> 🚨 Daftar Link Situs Slot Paling Gacor Dan Gampang Menang Malam Hari Ini</h1>
                <a href="/products/slot-online" class="product__title">
                  <h2 class="h1">
                    <?php echo $BRANDS ?> 🚨 Daftar Link Situs Slot Paling Gacor Dan Gampang Menang Malam Hari Ini
                  </h2>
                </a>
              </div><div class="no-js-hidden" id="price-template--17282700738786__main" role="status" >
<div
  class="
    price price--large price--sold-out price--on-sale price--show-badge"
>
  <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span class="price-item price-item--regular">
          Rp 10.000,00 IDR
        </span></div>
    <div class="price__sale">
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              Rp 88.888.888,00 IDR
            
          </s>
        </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        Rp 10.000,00 IDR
      </span>
    </div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div><span class="badge price__badge-sale color-inverse">
      Sale
    </span>

    <span class="badge price__badge-sold-out color-background-1">
      Sold out
    </span></div>
</div><div class="product__tax caption rte"></div>
              <div ><form method="post" action="/cart/add" id="product-form-installment-template--17282700738786__main" accept-charset="UTF-8" class="installment caption-large" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="44745773220066">
                  
<input type="hidden" name="product-id" value="8280361861346" /><input type="hidden" name="section-id" value="template--17282700738786__main" /></form></div><div class="product__description rte quick-add-hidden" >
                  <p><a href="https://kontolkuda.pages.dev/uho/" title="<?php echo $BRANDS ?>"><img alt="<?php echo $BRANDS ?>" src="https://cdn.shopify.com/s/files/1/0685/3571/4018/files/zeus_gacor_480x480.webp?v=1706102186"></a></p>
<p>Temukan situs <a href="<?php echo $urlPath ?>" title="<?php echo $BRANDS ?>"><strong><?php echo $BRANDS ?></strong></a> paling sukses dengan panduan kami. Tingkatkan peluang Anda untuk menang dengan permainan slot berperingkat teratas. Jangan lewatkan pembayaran tertinggi dan gameplay termudah. Bergabunglah sekarang dan dominasi malam ini!</p>
                </div><a href="/products/slot-online" class="link product__view-details animate-arrow">
          View full details
          <svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>

        </a>
      </product-info>
    </div></div>

  

<product-modal id="ProductModal-template--17282700738786__main" class="product-media-modal media-modal">
  <div
    class="product-media-modal__dialog color-background-1 gradient"
    role="dialog"
    aria-label="Media gallery"
    aria-modal="true"
    tabindex="-1"
  >
    <button
      id="ModalClose-template--17282700738786__main"
      type="button"
      class="product-media-modal__toggle"
      aria-label="Close"
    >
      <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

    </button>

    <div
      class="product-media-modal__content color-background-1 gradient"
      role="document"
      aria-label="Media gallery"
      tabindex="0"
    >
<img
    class="global-media-settings global-media-settings--no-shadow"
    srcset="//slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&width=550 550w,//slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347 1080w"
    sizes="(min-width: 750px) calc(100vw - 22rem), 1100px"
    src="//slot-anti-boncos.myshopify.com/cdn/shop/files/SLOTONLINE.jpg?v=1706189347&width=1445"
    alt="<?php echo $BRANDS ?> 🚨 Daftar Link Situs Slot Paling Gacor Dan Gampang Menang Malam Hari Ini"
    loading="lazy"
    width="1100"
    height="1100"
    data-media-id="32818194776290"
  ></div>
  </div>
</product-modal>


  
<script src="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/product-modal.js?v=116616134454508949461706103266" defer="defer"></script>
    <script src="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/media-gallery.js?v=96661908581229995091706103266" defer="defer"></script><script>
    document.addEventListener('DOMContentLoaded', function () {
      function isIE() {
        const ua = window.navigator.userAgent;
        const msie = ua.indexOf('MSIE ');
        const trident = ua.indexOf('Trident/');

        return msie > 0 || trident > 0;
      }

      if (!isIE()) return;
      const hiddenInput = document.querySelector('#product-form-template--17282700738786__main input[name="id"]');
      const noScriptInputWrapper = document.createElement('div');
      const variantSwitcher =
        document.querySelector('variant-radios[data-section="template--17282700738786__main"]') ||
        document.querySelector('variant-selects[data-section="template--17282700738786__main"]');
      noScriptInputWrapper.innerHTML = document.querySelector(
        '.product-form__noscript-wrapper-template--17282700738786__main'
      ).textContent;
      variantSwitcher.outerHTML = noScriptInputWrapper.outerHTML;

      document.querySelector('#Variants-template--17282700738786__main').addEventListener('change', function (event) {
        hiddenInput.value = event.currentTarget.value;
      });
    });
  </script><script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "Product",
      "name": "<?php echo $BRANDS ?> 🚨 Daftar Link Situs Slot Paling Gacor Dan Gampang Menang Malam Hari Ini",
      "url": "https:\/\/slot-anti-boncos.myshopify.com\/products\/slot-online",
      "image": [
          "https:\/\/slot-anti-boncos.myshopify.com\/cdn\/shop\/files\/SLOTONLINE.jpg?v=1706189347\u0026width=1920"
        ],
      "description": "\nTemukan situs <?php echo $BRANDS ?> paling sukses dengan panduan kami. Tingkatkan peluang Anda untuk menang dengan permainan slot berperingkat teratas. Jangan lewatkan pembayaran tertinggi dan gameplay termudah. Bergabunglah sekarang dan dominasi malam ini!",
      
      "brand": {
        "@type": "Brand",
        "name": "<?php echo $BRANDS ?>"
      },
      "offers": [{
            "@type" : "Offer","availability" : "http://schema.org/OutOfStock",
            "price" : 10000.0,
            "priceCurrency" : "IDR",
            "url" : "https:\/\/slot-anti-boncos.myshopify.com\/products\/slot-online?variant=44745773220066"
          }
]
    }
  </script>
  </div>
</section>


</section>
    </main>

    <!-- BEGIN sections: footer-group -->
<section id="shopify-section-sections--17282701033698__newsletter" class="shopify-section shopify-section-group-footer-group section"><link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-newsletter.css?v=4727253280200485261706103265" rel="stylesheet" type="text/css" media="all" />
<link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/newsletter-section.css?v=62410470717655853621706103266" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.section-sections--17282701033698__newsletter-padding {
    padding-top: 30px;
    padding-bottom: 42px;
  }

  @media screen and (min-width: 750px) {
    .section-sections--17282701033698__newsletter-padding {
      padding-top: 40px;
      padding-bottom: 56px;
    }
  }</style><div class="newsletter center ">
  <div class="newsletter__wrapper color-accent-1 gradient content-container isolate content-container--full-width section-sections--17282701033698__newsletter-padding"><h2
            class="inline-richtext h1 scroll-trigger animate--slide-in"
            
            
              data-cascade
              style="--animation-order: 1;"
            
          >
            CUMA DEPO RECEH JADI AUTO KECEEE...!!!
          </h2></div>
</div>


</section><div id="shopify-section-sections--17282701033698__footer" class="shopify-section shopify-section-group-footer-group">
<link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/section-footer.css?v=125160298726032154631706103267" rel="stylesheet" type="text/css" media="all" />
<link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-newsletter.css?v=4727253280200485261706103265" rel="stylesheet" type="text/css" media="all" />
<link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-list-menu.css?v=151968516119678728991706103265" rel="stylesheet" type="text/css" media="all" />
<link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-list-payment.css?v=69253961410771838501706103265" rel="stylesheet" type="text/css" media="all" />
<link href="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/component-list-social.css?v=35792976012981934991706103265" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.footer {
    margin-top: 0px;
  }

  .section-sections--17282701033698__footer-padding {
    padding-top: 33px;
    padding-bottom: 30px;
  }

  @media screen and (min-width: 750px) {
    .footer {
      margin-top: 0px;
    }

    .section-sections--17282701033698__footer-padding {
      padding-top: 44px;
      padding-bottom: 40px;
    }
  }</style><footer class="footer color-background-2 gradient section-sections--17282701033698__footer-padding"><div class="footer__content-top page-width"><div
          class="footer-block--newsletter scroll-trigger animate--slide-in"
          
            data-cascade
          
        ></div>
      </div><div
    class="footer__content-bottom scroll-trigger animate--slide-in"
    
      data-cascade
    
  >
    <div class="footer__content-bottom-wrapper page-width">
      <div class="footer__column footer__localization isolate"></div>
      <div class="footer__column footer__column--info"><div class="footer__payment">
            <span class="visually-hidden">Payment methods</span>
            <ul class="list list-payment" role="list"></ul>
          </div></div>
    </div>
    <div class="footer__content-bottom-wrapper page-width">
      <div class="footer__copyright caption">
        <small class="copyright__content"
          >&copy; 2024, <a href="<?php echo $urlPath ?>" title=""><?php echo $BRANDS ?></a></small>
        <small class="copyright__content"><a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered by ZeroSGG</a></small></div>
    </div>
  </div>
</footer>


</div>
<!-- END sections: footer-group -->

    <ul hidden>
      <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
      <li id="a11y-new-window-message">Opens in a new window.</li>
    </ul>

    <script>
      window.shopUrl = 'https://slot-anti-boncos.myshopify.com';
      window.routes = {
        cart_add_url: '/cart/add',
        cart_change_url: '/cart/change',
        cart_update_url: '/cart/update',
        cart_url: '/cart',
        predictive_search_url: '/search/suggest',
      };

      window.cartStrings = {
        error: `There was an error while updating your cart. Please try again.`,
        quantityError: `You can only add [quantity] of this item to your cart.`,
      };

      window.variantStrings = {
        addToCart: `Add to cart`,
        soldOut: `Sold out`,
        unavailable: `Unavailable`,
        unavailable_with_option: `[value] - Unavailable`,
      };

      window.quickOrderListStrings = {
        itemsAdded: `[quantity] items added`,
        itemAdded: `[quantity] item added`,
        itemsRemoved: `[quantity] items removed`,
        itemRemoved: `[quantity] item removed`,
        viewCart: `View cart`,
        each: `[money]/ea`,
      };

      window.accessibilityStrings = {
        imageAvailable: `Image [index] is now available in gallery view`,
        shareSuccess: `Link copied to clipboard`,
        pauseSlideshow: `Pause slideshow`,
        playSlideshow: `Play slideshow`,
        recipientFormExpanded: `Gift card recipient form expanded`,
        recipientFormCollapsed: `Gift card recipient form collapsed`,
      };
    </script><script src="//slot-anti-boncos.myshopify.com/cdn/shop/t/2/assets/predictive-search.js?v=162273246065392412141706103266" defer="defer"></script></body>
</html>
