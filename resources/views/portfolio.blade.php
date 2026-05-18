<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P. Juan Diego Vega - Portafolio</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cyan: {
                            DEFAULT: '#00F0FF',
                            50: '#E0FDFF',
                            100: '#BFFBFF',
                            200: '#80F7FF',
                            300: '#40F3FF',
                            400: '#00F0FF',
                            500: '#00C0CC',
                            600: '#009099',
                            700: '#006066',
                            800: '#003033',
                            900: '#00181A',
                        },
                        space: {
                            DEFAULT: '#0B0D17',
                            900: '#05060B',
                            800: '#0B0D17',
                            700: '#15192B',
                            600: '#202640',
                            500: '#2D3559',
                        },
                        accent: {
                            DEFAULT: '#8B5CF6',
                            purple: '#6D28D9',
                            pink: '#DB2777'
                        }
                    },
                    fontFamily: {
                        sans: ['Archivo', 'sans-serif'],
                        body: ['Space Grotesk', 'sans-serif'],
                    },
                    backgroundImage: {
                        'cosmic': 'radial-gradient(circle at center, #15192B 0%, #05060B 100%)',
                        'nebula': 'linear-gradient(to right bottom, rgba(139, 92, 246, 0.1), rgba(0, 240, 255, 0.05))',
                    }
                }
            }
        }
    </script>
    
    <style>
        body { background-color: #05060B; overflow-x: hidden; }
        .glass {
            background: rgba(11, 13, 23, 0.6);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(0, 240, 255, 0.1);
        }
        .glass-card {
            background: rgba(21, 25, 43, 0.4);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(139, 92, 246, 0.2);
            border-radius: 16px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 10;
        }
        .glass-card:hover {
            border-color: rgba(0, 240, 255, 0.4);
            box-shadow: 0 10px 30px -10px rgba(0, 240, 255, 0.2);
            transform: translateY(-5px);
        }
        
        /* Efecto de Estrellas Parallax Puro CSS */
        #stars, #stars2, #stars3 {
            position: absolute;
            top: 0; left: 0;
            background: transparent;
        }
        #stars {
            width: 1px; height: 1px;
            box-shadow: 606px 2961px #FFF, 1374px 781px #FFF, 597px 1519px #FFF, 2897px 1431px #FFF, 2909px 2642px #FFF, 2330px 2861px #FFF, 827px 1337px #FFF, 532px 672px #FFF, 2194px 1652px #FFF, 2825px 2149px #FFF, 1499px 650px #FFF, 1456px 299px #FFF, 2227px 824px #FFF, 1146px 147px #FFF, 1888px 1475px #FFF, 1017px 1419px #FFF, 1013px 1941px #FFF, 2156px 2907px #FFF, 168px 876px #FFF, 2245px 527px #FFF, 1014px 894px #FFF, 813px 953px #FFF, 108px 2072px #FFF, 274px 1422px #FFF, 1938px 939px #FFF, 555px 1769px #FFF, 2458px 854px #FFF, 2899px 2266px #FFF, 279px 159px #FFF, 2006px 658px #FFF, 1284px 881px #FFF, 328px 1284px #FFF, 2288px 1799px #FFF, 776px 1651px #FFF, 12px 48px #FFF, 406px 517px #FFF, 1356px 2719px #FFF, 2243px 4px #FFF, 1837px 1761px #FFF, 880px 520px #FFF, 1585px 2278px #FFF, 71px 1851px #FFF, 1215px 317px #FFF, 217px 1413px #FFF, 1860px 1925px #FFF, 2102px 853px #FFF, 864px 1383px #FFF, 36px 1826px #FFF, 2882px 301px #FFF, 1302px 1486px #FFF, 1171px 1757px #FFF, 2327px 110px #FFF, 1717px 99px #FFF, 1809px 324px #FFF, 2356px 267px #FFF, 1134px 112px #FFF, 970px 1986px #FFF, 1386px 2731px #FFF, 1096px 1038px #FFF, 2530px 2769px #FFF, 842px 1891px #FFF, 2329px 2970px #FFF, 1211px 1674px #FFF, 2468px 2503px #FFF, 2328px 1382px #FFF, 1761px 2609px #FFF, 1497px 2332px #FFF, 1426px 1094px #FFF, 443px 1827px #FFF, 627px 353px #FFF, 1788px 1894px #FFF, 2896px 2891px #FFF, 2081px 575px #FFF, 544px 492px #FFF, 1176px 227px #FFF, 2211px 1746px #FFF, 696px 1606px #FFF, 251px 70px #FFF, 1757px 2626px #FFF, 1583px 2832px #FFF, 1068px 1372px #FFF, 2959px 3000px #FFF, 1138px 765px #FFF, 1100px 2716px #FFF, 1826px 2987px #FFF, 2859px 96px #FFF, 2594px 1237px #FFF, 2659px 1561px #FFF, 1647px 2866px #FFF, 2694px 1281px #FFF, 344px 496px #FFF, 1037px 2077px #FFF, 2375px 2218px #FFF, 2875px 1779px #FFF, 654px 1251px #FFF, 468px 2199px #FFF, 1426px 1727px #FFF, 2525px 2302px #FFF, 2844px 813px #FFF, 1378px 2950px #FFF, 271px 2321px #FFF, 1266px 1713px #FFF, 1328px 1926px #FFF, 2197px 1083px #FFF, 2333px 1601px #FFF, 2685px 943px #FFF, 2841px 1988px #FFF, 1811px 950px #FFF, 2774px 2611px #FFF, 2840px 1744px #FFF, 2448px 255px #FFF, 1619px 1768px #FFF, 2391px 466px #FFF, 1057px 967px #FFF, 2594px 2402px #FFF, 692px 1017px #FFF, 446px 1848px #FFF, 2390px 1133px #FFF, 64px 1814px #FFF, 1864px 2540px #FFF, 2287px 1019px #FFF, 480px 226px #FFF, 63px 2471px #FFF, 2057px 997px #FFF, 2288px 2363px #FFF, 1865px 1991px #FFF, 892px 75px #FFF, 2505px 2872px #FFF, 470px 104px #FFF, 2956px 2555px #FFF, 1075px 1161px #FFF, 2643px 1705px #FFF, 1958px 773px #FFF, 165px 1784px #FFF, 1388px 1773px #FFF, 785px 896px #FFF, 2490px 2424px #FFF, 2816px 1379px #FFF, 1404px 2188px #FFF, 2580px 25px #FFF, 545px 1422px #FFF, 1527px 2956px #FFF, 1913px 304px #FFF, 1968px 380px #FFF, 2502px 2567px #FFF, 1555px 1739px #FFF, 2130px 2835px #FFF, 154px 2584px #FFF, 1555px 1028px #FFF, 2149px 2751px #FFF, 2832px 515px #FFF, 1809px 1489px #FFF, 1301px 74px #FFF, 2814px 1776px #FFF, 324px 206px #FFF, 2008px 378px #FFF, 56px 912px #FFF, 2065px 937px #FFF, 2933px 2339px #FFF, 1682px 653px #FFF, 735px 1562px #FFF, 2076px 173px #FFF, 1789px 481px #FFF, 2382px 2544px #FFF, 559px 2559px #FFF, 1154px 1913px #FFF, 2998px 697px #FFF, 306px 243px #FFF, 225px 1986px #FFF, 2125px 662px #FFF, 1753px 885px #FFF, 2636px 1015px #FFF, 2202px 531px #FFF, 1897px 418px #FFF, 977px 459px #FFF, 1078px 1589px #FFF, 830px 2214px #FFF, 1046px 2467px #FFF, 134px 1031px #FFF, 332px 1965px #FFF, 121px 1227px #FFF, 2078px 996px #FFF, 393px 217px #FFF, 1417px 518px #FFF, 2421px 1835px #FFF, 2244px 1211px #FFF, 2057px 2898px #FFF, 187px 1993px #FFF, 1442px 904px #FFF, 2689px 1623px #FFF, 2416px 749px #FFF, 2936px 229px #FFF, 878px 2124px #FFF, 779px 1230px #FFF, 1125px 2400px #FFF, 630px 422px #FFF, 1270px 2777px #FFF, 1176px 2005px #FFF, 91px 897px #FFF, 2276px 1340px #FFF, 309px 40px #FFF, 2709px 590px #FFF, 2274px 1594px #FFF, 2205px 1789px #FFF, 739px 2328px #FFF, 718px 1279px #FFF, 19px 2588px #FFF, 1942px 1065px #FFF, 416px 1391px #FFF, 1922px 2666px #FFF, 1190px 991px #FFF, 57px 2221px #FFF, 2557px 1144px #FFF, 1528px 2375px #FFF, 2248px 1224px #FFF, 2077px 2810px #FFF, 1138px 1648px #FFF, 2620px 2422px #FFF, 2331px 2519px #FFF, 2716px 2753px #FFF, 2913px 2339px #FFF, 570px 911px #FFF, 1716px 179px #FFF, 2728px 2624px #FFF, 2652px 1704px #FFF, 1703px 529px #FFF, 1284px 2303px #FFF, 1774px 1852px #FFF, 1926px 2610px #FFF, 2245px 1380px #FFF, 2792px 2199px #FFF, 2387px 353px #FFF, 855px 203px #FFF, 311px 1740px #FFF, 1640px 2356px #FFF, 582px 2994px #FFF, 2458px 2154px #FFF, 428px 2438px #FFF, 2754px 1769px #FFF, 394px 2662px #FFF, 1234px 394px #FFF, 1526px 1290px #FFF, 2196px 612px #FFF, 1755px 1162px #FFF, 2904px 1406px #FFF, 1068px 605px #FFF, 2705px 219px #FFF, 729px 972px #FFF, 1558px 449px #FFF, 375px 2940px #FFF, 450px 2542px #FFF, 2231px 429px #FFF, 311px 1471px #FFF, 1650px 2962px #FFF, 977px 2198px #FFF, 715px 634px #FFF, 395px 2159px #FFF, 2072px 2851px #FFF, 2013px 60px #FFF, 1186px 2598px #FFF, 2988px 2254px #FFF, 1467px 2834px #FFF, 2742px 906px #FFF, 632px 1271px #FFF, 1643px 1583px #FFF, 2818px 2444px #FFF, 1887px 467px #FFF, 741px 1279px #FFF, 2px 1623px #FFF, 497px 2626px #FFF, 1192px 1276px #FFF, 761px 2386px #FFF, 378px 1011px #FFF, 203px 1472px #FFF, 2087px 2009px #FFF, 1388px 1382px #FFF, 1139px 1275px #FFF, 274px 2613px #FFF, 2533px 2245px #FFF, 2705px 2407px #FFF, 2477px 2418px #FFF, 524px 109px #FFF, 655px 2507px #FFF, 603px 455px #FFF, 1440px 1843px #FFF, 2743px 1613px #FFF, 71px 508px #FFF, 359px 2507px #FFF, 2661px 1897px #FFF, 1832px 480px #FFF, 1121px 343px #FFF, 2231px 12px #FFF, 1319px 1147px #FFF, 2152px 482px #FFF, 792px 621px #FFF, 1930px 2535px #FFF, 437px 1069px #FFF, 709px 336px #FFF, 1908px 349px #FFF, 2029px 2402px #FFF, 1127px 2827px #FFF, 1415px 312px #FFF, 510px 1968px #FFF, 610px 2755px #FFF, 2684px 41px #FFF, 713px 2303px #FFF, 1749px 892px #FFF, 1679px 753px #FFF, 1596px 1763px #FFF, 2574px 1799px #FFF, 2536px 2464px #FFF, 1037px 2633px #FFF, 1259px 813px #FFF, 2904px 2701px #FFF, 1888px 2578px #FFF, 447px 2841px #FFF, 1806px 999px #FFF, 2105px 2126px #FFF, 38px 2735px #FFF, 721px 1204px #FFF, 865px 1487px #FFF, 1419px 1889px #FFF, 2867px 499px #FFF, 53px 1702px #FFF, 1241px 1114px #FFF, 316px 2852px #FFF, 2113px 445px #FFF, 156px 378px #FFF, 1700px 2734px #FFF, 2501px 716px #FFF, 597px 1097px #FFF, 2651px 2231px #FFF, 1645px 1869px #FFF, 2592px 740px #FFF, 170px 1436px #FFF, 2956px 1806px #FFF, 1903px 1097px #FFF, 1246px 885px #FFF, 1680px 2438px #FFF, 922px 1535px #FFF, 2870px 2154px #FFF, 1456px 501px #FFF, 1445px 609px #FFF, 1934px 72px #FFF, 692px 2032px #FFF, 1291px 1383px #FFF, 1463px 2867px #FFF, 916px 1481px #FFF, 1234px 2844px #FFF, 873px 2014px #FFF, 2141px 1213px #FFF, 1488px 1226px #FFF, 292px 1320px #FFF, 1278px 1364px #FFF, 2668px 2964px #FFF, 1363px 1217px #FFF, 2545px 2552px #FFF, 1831px 1139px #FFF, 142px 2158px #FFF, 2478px 1254px #FFF, 2935px 2184px #FFF, 990px 340px #FFF, 1537px 947px #FFF, 280px 352px #FFF, 2947px 1243px #FFF, 639px 458px #FFF, 1807px 687px #FFF, 2098px 2042px #FFF, 1267px 638px #FFF, 818px 973px #FFF, 986px 1798px #FFF, 456px 1475px #FFF, 1886px 1871px #FFF, 1266px 2511px #FFF, 646px 2877px #FFF, 2491px 1741px #FFF, 1730px 2492px #FFF, 185px 1619px #FFF, 1176px 2486px #FFF, 2534px 1345px #FFF, 176px 2162px #FFF, 2262px 846px #FFF, 1402px 1426px #FFF, 583px 2495px #FFF, 2298px 1162px #FFF, 220px 2029px #FFF, 181px 1820px #FFF, 1643px 1540px #FFF, 2598px 623px #FFF, 1616px 2427px #FFF, 1819px 2771px #FFF, 345px 1051px #FFF, 762px 2038px #FFF, 1862px 698px #FFF, 91px 2269px #FFF, 1275px 2793px #FFF, 700px 2452px #FFF, 155px 495px #FFF, 2741px 2519px #FFF, 674px 201px #FFF, 2218px 1825px #FFF, 1300px 1839px #FFF, 2712px 1671px #FFF, 2486px 977px #FFF, 7px 2773px #FFF, 2089px 1750px #FFF, 1789px 1405px #FFF, 28px 598px #FFF, 1447px 798px #FFF, 2275px 1040px #FFF, 607px 2133px #FFF, 317px 1552px #FFF, 948px 682px #FFF, 1309px 815px #FFF, 887px 940px #FFF, 1787px 1875px #FFF, 536px 773px #FFF, 444px 1355px #FFF, 2898px 2128px #FFF, 1734px 1225px #FFF, 172px 1507px #FFF, 2855px 2311px #FFF, 2583px 685px #FFF, 91px 76px #FFF, 227px 1931px #FFF, 1986px 1554px #FFF, 1891px 198px #FFF, 331px 2450px #FFF, 40px 2652px #FFF, 2784px 2994px #FFF, 1628px 2946px #FFF, 113px 937px #FFF, 483px 68px #FFF, 2900px 2923px #FFF, 521px 2183px #FFF, 2413px 1678px #FFF, 706px 2580px #FFF, 99px 2960px #FFF, 793px 2851px #FFF, 153px 1343px #FFF, 2662px 2451px #FFF, 1146px 1294px #FFF, 2066px 1850px #FFF, 585px 2809px #FFF, 1215px 1042px #FFF, 1900px 1578px #FFF, 1566px 1931px #FFF, 2302px 1463px #FFF, 453px 1316px #FFF, 2512px 1978px #FFF, 2236px 1965px #FFF, 509px 2665px #FFF, 2121px 1455px #FFF, 2166px 1019px #FFF, 309px 2125px #FFF, 2738px 2978px #FFF, 859px 2880px #FFF, 1932px 924px #FFF, 1675px 2985px #FFF, 1472px 2505px #FFF, 349px 2773px #FFF, 1733px 1284px #FFF, 2300px 285px #FFF, 329px 959px #FFF, 212px 1386px #FFF, 135px 1278px #FFF, 2235px 1292px #FFF, 437px 609px #FFF, 2419px 2559px #FFF, 139px 410px #FFF, 2267px 2944px #FFF, 1616px 2415px #FFF, 1895px 2097px #FFF, 484px 668px #FFF, 254px 1409px #FFF, 799px 755px #FFF, 986px 2500px #FFF, 2688px 2983px #FFF, 1027px 2204px #FFF, 897px 2058px #FFF, 203px 1272px #FFF, 808px 1305px #FFF, 2052px 1918px #FFF, 119px 638px #FFF, 963px 2648px #FFF, 1061px 2329px #FFF, 844px 598px #FFF, 2993px 2044px #FFF, 2912px 1089px #FFF, 714px 1932px #FFF, 1420px 2399px #FFF, 505px 2206px #FFF, 854px 1603px #FFF, 2799px 2445px #FFF, 303px 2326px #FFF, 2129px 679px #FFF, 313px 1929px #FFF, 2364px 1051px #FFF, 2134px 205px #FFF, 430px 1891px #FFF, 735px 496px #FFF, 1568px 152px #FFF, 522px 2210px #FFF, 1857px 340px #FFF, 135px 2685px #FFF, 2922px 286px #FFF, 2345px 2358px #FFF, 2538px 2624px #FFF, 1405px 2985px #FFF, 649px 1902px #FFF, 1650px 2284px #FFF, 2348px 1466px #FFF, 367px 978px #FFF, 1537px 2508px #FFF, 685px 161px #FFF, 977px 1173px #FFF, 617px 6px #FFF, 635px 1425px #FFF, 1090px 1647px #FFF, 1975px 2651px #FFF, 1189px 2697px #FFF, 1553px 2588px #FFF, 1290px 2616px #FFF, 138px 447px #FFF, 123px 537px #FFF, 2161px 2979px #FFF, 368px 2099px #FFF, 1297px 211px #FFF, 2049px 322px #FFF, 1916px 1034px #FFF, 2096px 108px #FFF, 695px 326px #FFF, 2065px 155px #FFF, 2199px 986px #FFF, 521px 1391px #FFF, 2287px 378px #FFF, 1132px 2936px #FFF, 1360px 2537px #FFF, 2643px 2556px #FFF, 1847px 1001px #FFF, 1110px 1550px #FFF, 87px 2606px #FFF, 1970px 767px #FFF, 2457px 685px #FFF, 2100px 2028px #FFF, 1815px 1440px #FFF, 405px 329px #FFF, 2258px 2901px #FFF, 361px 2426px #FFF, 292px 418px #FFF, 157px 1471px #FFF, 683px 1183px #FFF, 862px 2951px #FFF, 1564px 1588px #FFF, 2991px 2139px #FFF, 2449px 1716px #FFF, 511px 2297px #FFF, 2674px 2945px #FFF, 2000px 2387px #FFF, 949px 691px #FFF, 503px 2152px #FFF, 2806px 320px #FFF, 585px 1744px #FFF, 2581px 2236px #FFF, 828px 2610px #FFF, 1081px 2277px #FFF, 452px 2128px #FFF, 144px 1925px #FFF, 2966px 1208px #FFF, 2042px 537px #FFF, 1908px 1817px #FFF, 1287px 2212px #FFF, 295px 1751px #FFF, 39px 1773px #FFF, 39px 1168px #FFF, 2174px 458px #FFF, 739px 801px #FFF, 1678px 801px #FFF, 1458px 2136px #FFF, 2960px 237px #FFF, 1209px 1476px #FFF, 249px 97px #FFF, 264px 2976px #FFF, 1017px 973px #FFF, 875px 1164px #FFF, 544px 2392px #FFF, 2511px 2168px #FFF, 2272px 2043px #FFF, 65px 1398px #FFF, 1701px 828px #FFF, 1911px 1086px #FFF, 2977px 668px #FFF, 2595px 2397px #FFF, 1689px 1718px #FFF, 2170px 1761px #FFF, 533px 358px #FFF, 46px 2074px #FFF, 781px 1444px #FFF, 2547px 1867px #FFF, 1805px 179px #FFF, 2670px 869px #FFF, 1698px 2991px #FFF, 225px 1369px #FFF, 1607px 920px #FFF, 217px 2530px #FFF, 1185px 1295px #FFF, 1816px 1357px #FFF, 40px 2857px #FFF, 687px 1186px #FFF, 1977px 649px #FFF, 1820px 2834px #FFF, 643px 2716px #FFF, 1540px 2215px #FFF, 2476px 2504px #FFF, 2555px 551px #FFF, 2281px 2094px #FFF, 272px 2677px #FFF, 1282px 53px #FFF, 986px 1213px #FFF, 481px 1369px #FFF, 251px 263px #FFF, 162px 2189px #FFF, 2197px 1734px #FFF, 273px 1984px #FFF, 417px 1980px #FFF, 1202px 1599px #FFF, 2506px 2829px #FFF, 397px 1308px #FFF, 2624px 2997px #FFF, 723px 2783px #FFF, 1941px 1492px #FFF, 2110px 103px #FFF, 2452px 518px #FFF, 2934px 446px #FFF, 2631px 1884px #FFF, 255px 2971px #FFF, 1787px 537px #FFF, 1032px 1404px #FFF, 2388px 250px #FFF, 2810px 2266px #FFF, 2437px 180px #FFF, 1846px 1215px #FFF, 177px 1694px #FFF, 1932px 2439px #FFF, 1344px 1142px #FFF, 2998px 2148px #FFF, 1237px 2528px #FFF, 1801px 1292px #FFF, 1046px 2635px #FFF, 2317px 651px #FFF, 2620px 1764px #FFF, 2456px 576px #FFF, 2151px 274px #FFF, 1106px 2810px #FFF, 2662px 2171px #FFF, 1454px 77px #FFF, 938px 1226px #FFF, 1838px 305px #FFF, 1914px 192px #FFF, 1603px 1601px #FFF, 1706px 2367px #FFF, 884px 144px #FFF, 842px 1637px #FFF, 1646px 1078px #FFF, 2259px 2073px #FFF, 2720px 952px #FFF, 2719px 2125px #FFF, 384px 1751px #FFF, 1354px 1190px #FFF, 638px 878px #FFF, 1048px 1979px #FFF, 2300px 631px #FFF, 2393px 154px #FFF, 972px 546px #FFF, 1518px 873px #FFF, 2508px 2093px #FFF, 1847px 1219px #FFF, 1548px 2676px #FFF, 2835px 1675px #FFF, 2723px 771px #FFF, 2572px 204px #FFF, 515px 150px #FFF, 1984px 2887px #FFF, 2780px 1126px #FFF, 2996px 131px #FFF, 644px 630px #FFF, 1693px 2671px #FFF, 931px 959px #FFF, 1101px 2405px #FFF, 1984px 2440px #FFF, 2579px 207px #FFF, 1340px 2668px #FFF, 423px 2809px #FFF, 2242px 2973px #FFF, 1817px 1344px #FFF, 2301px 2497px #FFF, 266px 558px #FFF, 1041px 875px #FFF, 1020px 2537px #FFF, 2125px 209px #FFF, 1163px 1335px #FFF, 894px 1749px #FFF, 2543px 1811px #FFF, 1907px 1115px #FFF, 1808px 501px #FFF, 2873px 2746px #FFF, 2654px 267px #FFF, 2648px 2905px #FFF, 2755px 2277px #FFF, 1077px 2622px #FFF, 499px 2041px #FFF, 1085px 743px #FFF, 1757px 439px #FFF, 712px 1533px #FFF, 1456px 1562px #FFF, 1021px 1895px #FFF, 1748px 2809px #FFF, 1487px 2520px #FFF, 2885px 2154px #FFF, 2229px 2183px #FFF, 353px 550px #FFF, 1135px 847px #FFF, 2463px 2397px #FFF, 2925px 1455px #FFF, 907px 1252px #FFF, 1272px 1753px #FFF, 1980px 2167px #FFF, 1035px 233px #FFF, 2049px 286px #FFF, 1035px 2360px #FFF, 393px 1897px #FFF, 2089px 2651px #FFF, 978px 1386px #FFF, 1193px 1925px #FFF, 2239px 2257px #FFF, 1729px 1746px #FFF, 1843px 190px #FFF, 2286px 485px #FFF, 980px 2859px #FFF, 2199px 339px #FFF, 171px 1288px #FFF, 1121px 123px #FFF, 900px 1994px #FFF, 1581px 2896px #FFF, 1922px 1141px #FFF, 2475px 115px #FFF, 2709px 1999px #FFF, 1554px 2201px #FFF, 347px 2536px #FFF, 2254px 1721px #FFF, 978px 1468px #FFF, 2738px 791px #FFF, 2273px 971px #FFF, 1681px 2989px #FFF, 456px 2152px #FFF, 1489px 2282px #FFF, 1131px 1615px #FFF, 372px 241px #FFF, 718px 2971px #FFF, 1797px 801px #FFF, 1620px 2869px #FFF, 2238px 2673px #FFF, 2191px 228px #FFF, 2255px 1417px #FFF, 83px 1002px #FFF, 2679px 967px #FFF, 706px 2614px #FFF, 24px 2612px #FFF, 2672px 2475px #FFF, 690px 2114px #FFF, 2414px 1520px #FFF, 260px 1764px #FFF, 809px 510px #FFF, 1126px 2336px #FFF, 320px 863px #FFF, 1658px 1251px #FFF, 470px 2141px #FFF, 595px 1885px #FFF, 1918px 1191px #FFF, 2159px 87px #FFF, 313px 2595px #FFF, 2731px 1911px #FFF, 2834px 336px #FFF, 526px 2266px #FFF, 798px 421px #FFF, 2147px 617px #FFF, 1812px 1293px #FFF, 1479px 36px #FFF, 2620px 1280px #FFF, 419px 2871px #FFF, 1482px 2908px #FFF, 326px 2630px #FFF, 1054px 2075px #FFF, 2494px 1493px #FFF, 736px 1250px #FFF, 1002px 2879px #FFF, 858px 2581px #FFF, 48px 2949px #FFF, 409px 2153px #FFF, 1041px 512px #FFF, 2370px 2942px #FFF, 1273px 467px #FFF, 438px 855px #FFF, 1430px 2987px #FFF, 1205px 416px #FFF, 2083px 363px #FFF, 2485px 2405px #FFF, 500px 237px #FFF, 1220px 1987px #FFF, 204px 50px #FFF, 1618px 462px #FFF, 1969px 187px #FFF, 397px 112px #FFF, 2313px 1876px #FFF, 1002px 473px #FFF, 1254px 2903px #FFF, 970px 473px #FFF, 2411px 2809px #FFF, 639px 1043px #FFF, 2530px 2189px #FFF, 2030px 866px #FFF, 1028px 247px #FFF, 2292px 1621px #FFF, 1694px 707px #FFF, 1039px 1739px #FFF, 2197px 151px #FFF, 1607px 2887px #FFF, 2308px 2810px #FFF, 2423px 2017px #FFF, 1866px 2891px #FFF, 800px 1452px #FFF, 1372px 1503px #FFF, 293px 500px #FFF, 2840px 579px #FFF, 2966px 1225px #FFF, 28px 1157px #FFF, 2587px 1368px #FFF, 1714px 322px #FFF, 168px 2527px #FFF, 1659px 772px #FFF, 550px 1764px #FFF, 2470px 1939px #FFF, 1964px 267px #FFF, 2861px 1967px #FFF, 225px 2472px #FFF, 1507px 2500px #FFF, 1572px 782px #FFF, 832px 2401px #FFF, 849px 351px #FFF, 46px 899px #FFF, 1108px 189px #FFF, 1233px 163px #FFF, 2377px 641px #FFF, 235px 759px #FFF, 1690px 493px #FFF, 124px 2053px #FFF, 2883px 997px #FFF, 2831px 863px #FFF, 18px 149px #FFF, 498px 2802px #FFF, 652px 1070px #FFF, 1859px 1045px #FFF, 2907px 2665px #FFF, 1094px 385px #FFF, 2818px 1557px #FFF, 2499px 2697px #FFF, 1980px 913px #FFF, 62px 2883px #FFF, 1499px 2230px #FFF, 2311px 1565px #FFF, 938px 605px #FFF, 2397px 2622px #FFF, 2716px 920px #FFF, 228px 1048px #FFF, 359px 2328px #FFF, 2500px 1565px #FFF, 423px 2590px #FFF, 1306px 1988px #FFF, 1236px 1843px #FFF, 665px 2077px #FFF, 1311px 2347px #FFF, 989px 1300px #FFF, 2924px 1668px #FFF, 2671px 673px #FFF, 293px 819px #FFF, 1018px 1583px #FFF, 913px 1749px #FFF, 1172px 964px #FFF, 2350px 2256px #FFF, 2484px 1174px #FFF, 51px 2670px #FFF, 489px 443px #FFF, 1633px 182px #FFF, 863px 1242px #FFF, 1036px 1693px #FFF, 304px 1534px #FFF, 2880px 1776px #FFF, 431px 2185px #FFF, 1864px 482px #FFF, 98px 2999px #FFF;
            animation: animStar 150s linear infinite;
        }
        #stars::after {
            content: " "; position: absolute; top: 3000px;
            width: 1px; height: 1px; box-shadow: 606px 2961px #FFF, 1374px 781px #FFF, 597px 1519px #FFF, 2897px 1431px #FFF, 2909px 2642px #FFF, 2330px 2861px #FFF, 827px 1337px #FFF, 532px 672px #FFF, 2194px 1652px #FFF, 2825px 2149px #FFF, 1499px 650px #FFF, 1456px 299px #FFF, 2227px 824px #FFF, 1146px 147px #FFF, 1888px 1475px #FFF, 1017px 1419px #FFF, 1013px 1941px #FFF, 2156px 2907px #FFF, 168px 876px #FFF, 2245px 527px #FFF, 1014px 894px #FFF, 813px 953px #FFF, 108px 2072px #FFF, 274px 1422px #FFF, 1938px 939px #FFF, 555px 1769px #FFF, 2458px 854px #FFF, 2899px 2266px #FFF, 279px 159px #FFF, 2006px 658px #FFF, 1284px 881px #FFF, 328px 1284px #FFF, 2288px 1799px #FFF, 776px 1651px #FFF, 12px 48px #FFF, 406px 517px #FFF, 1356px 2719px #FFF, 2243px 4px #FFF, 1837px 1761px #FFF, 880px 520px #FFF, 1585px 2278px #FFF, 71px 1851px #FFF, 1215px 317px #FFF, 217px 1413px #FFF, 1860px 1925px #FFF, 2102px 853px #FFF, 864px 1383px #FFF, 36px 1826px #FFF, 2882px 301px #FFF, 1302px 1486px #FFF, 1171px 1757px #FFF, 2327px 110px #FFF, 1717px 99px #FFF, 1809px 324px #FFF, 2356px 267px #FFF, 1134px 112px #FFF, 970px 1986px #FFF, 1386px 2731px #FFF, 1096px 1038px #FFF, 2530px 2769px #FFF, 842px 1891px #FFF, 2329px 2970px #FFF, 1211px 1674px #FFF, 2468px 2503px #FFF, 2328px 1382px #FFF, 1761px 2609px #FFF, 1497px 2332px #FFF, 1426px 1094px #FFF, 443px 1827px #FFF, 627px 353px #FFF, 1788px 1894px #FFF, 2896px 2891px #FFF, 2081px 575px #FFF, 544px 492px #FFF, 1176px 227px #FFF, 2211px 1746px #FFF, 696px 1606px #FFF, 251px 70px #FFF, 1757px 2626px #FFF, 1583px 2832px #FFF, 1068px 1372px #FFF, 2959px 3000px #FFF, 1138px 765px #FFF, 1100px 2716px #FFF, 1826px 2987px #FFF, 2859px 96px #FFF, 2594px 1237px #FFF, 2659px 1561px #FFF, 1647px 2866px #FFF, 2694px 1281px #FFF, 344px 496px #FFF, 1037px 2077px #FFF, 2375px 2218px #FFF, 2875px 1779px #FFF, 654px 1251px #FFF, 468px 2199px #FFF, 1426px 1727px #FFF, 2525px 2302px #FFF, 2844px 813px #FFF, 1378px 2950px #FFF, 271px 2321px #FFF, 1266px 1713px #FFF, 1328px 1926px #FFF, 2197px 1083px #FFF, 2333px 1601px #FFF, 2685px 943px #FFF, 2841px 1988px #FFF, 1811px 950px #FFF, 2774px 2611px #FFF, 2840px 1744px #FFF, 2448px 255px #FFF, 1619px 1768px #FFF, 2391px 466px #FFF, 1057px 967px #FFF, 2594px 2402px #FFF, 692px 1017px #FFF, 446px 1848px #FFF, 2390px 1133px #FFF, 64px 1814px #FFF, 1864px 2540px #FFF, 2287px 1019px #FFF, 480px 226px #FFF, 63px 2471px #FFF, 2057px 997px #FFF, 2288px 2363px #FFF, 1865px 1991px #FFF, 892px 75px #FFF, 2505px 2872px #FFF, 470px 104px #FFF, 2956px 2555px #FFF, 1075px 1161px #FFF, 2643px 1705px #FFF, 1958px 773px #FFF, 165px 1784px #FFF, 1388px 1773px #FFF, 785px 896px #FFF, 2490px 2424px #FFF, 2816px 1379px #FFF, 1404px 2188px #FFF, 2580px 25px #FFF, 545px 1422px #FFF, 1527px 2956px #FFF, 1913px 304px #FFF, 1968px 380px #FFF, 2502px 2567px #FFF, 1555px 1739px #FFF, 2130px 2835px #FFF, 154px 2584px #FFF, 1555px 1028px #FFF, 2149px 2751px #FFF, 2832px 515px #FFF, 1809px 1489px #FFF, 1301px 74px #FFF, 2814px 1776px #FFF, 324px 206px #FFF, 2008px 378px #FFF, 56px 912px #FFF, 2065px 937px #FFF, 2933px 2339px #FFF, 1682px 653px #FFF, 735px 1562px #FFF, 2076px 173px #FFF, 1789px 481px #FFF, 2382px 2544px #FFF, 559px 2559px #FFF, 1154px 1913px #FFF, 2998px 697px #FFF, 306px 243px #FFF, 225px 1986px #FFF, 2125px 662px #FFF, 1753px 885px #FFF, 2636px 1015px #FFF, 2202px 531px #FFF, 1897px 418px #FFF, 977px 459px #FFF, 1078px 1589px #FFF, 830px 2214px #FFF, 1046px 2467px #FFF, 134px 1031px #FFF, 332px 1965px #FFF, 121px 1227px #FFF, 2078px 996px #FFF, 393px 217px #FFF, 1417px 518px #FFF, 2421px 1835px #FFF, 2244px 1211px #FFF, 2057px 2898px #FFF, 187px 1993px #FFF, 1442px 904px #FFF, 2689px 1623px #FFF, 2416px 749px #FFF, 2936px 229px #FFF, 878px 2124px #FFF, 779px 1230px #FFF, 1125px 2400px #FFF, 630px 422px #FFF, 1270px 2777px #FFF, 1176px 2005px #FFF, 91px 897px #FFF, 2276px 1340px #FFF, 309px 40px #FFF, 2709px 590px #FFF, 2274px 1594px #FFF, 2205px 1789px #FFF, 739px 2328px #FFF, 718px 1279px #FFF, 19px 2588px #FFF, 1942px 1065px #FFF, 416px 1391px #FFF, 1922px 2666px #FFF, 1190px 991px #FFF, 57px 2221px #FFF, 2557px 1144px #FFF, 1528px 2375px #FFF, 2248px 1224px #FFF, 2077px 2810px #FFF, 1138px 1648px #FFF, 2620px 2422px #FFF, 2331px 2519px #FFF, 2716px 2753px #FFF, 2913px 2339px #FFF, 570px 911px #FFF, 1716px 179px #FFF, 2728px 2624px #FFF, 2652px 1704px #FFF, 1703px 529px #FFF, 1284px 2303px #FFF, 1774px 1852px #FFF, 1926px 2610px #FFF, 2245px 1380px #FFF, 2792px 2199px #FFF, 2387px 353px #FFF, 855px 203px #FFF, 311px 1740px #FFF, 1640px 2356px #FFF, 582px 2994px #FFF, 2458px 2154px #FFF, 428px 2438px #FFF, 2754px 1769px #FFF, 394px 2662px #FFF, 1234px 394px #FFF, 1526px 1290px #FFF, 2196px 612px #FFF, 1755px 1162px #FFF, 2904px 1406px #FFF, 1068px 605px #FFF, 2705px 219px #FFF, 729px 972px #FFF, 1558px 449px #FFF, 375px 2940px #FFF, 450px 2542px #FFF, 2231px 429px #FFF, 311px 1471px #FFF, 1650px 2962px #FFF, 977px 2198px #FFF, 715px 634px #FFF, 395px 2159px #FFF, 2072px 2851px #FFF, 2013px 60px #FFF, 1186px 2598px #FFF, 2988px 2254px #FFF, 1467px 2834px #FFF, 2742px 906px #FFF, 632px 1271px #FFF, 1643px 1583px #FFF, 2818px 2444px #FFF, 1887px 467px #FFF, 741px 1279px #FFF, 2px 1623px #FFF, 497px 2626px #FFF, 1192px 1276px #FFF, 761px 2386px #FFF, 378px 1011px #FFF, 203px 1472px #FFF, 2087px 2009px #FFF, 1388px 1382px #FFF, 1139px 1275px #FFF, 274px 2613px #FFF, 2533px 2245px #FFF, 2705px 2407px #FFF, 2477px 2418px #FFF, 524px 109px #FFF, 655px 2507px #FFF, 603px 455px #FFF, 1440px 1843px #FFF, 2743px 1613px #FFF, 71px 508px #FFF, 359px 2507px #FFF, 2661px 1897px #FFF, 1832px 480px #FFF, 1121px 343px #FFF, 2231px 12px #FFF, 1319px 1147px #FFF, 2152px 482px #FFF, 792px 621px #FFF, 1930px 2535px #FFF, 437px 1069px #FFF, 709px 336px #FFF, 1908px 349px #FFF, 2029px 2402px #FFF, 1127px 2827px #FFF, 1415px 312px #FFF, 510px 1968px #FFF, 610px 2755px #FFF, 2684px 41px #FFF, 713px 2303px #FFF, 1749px 892px #FFF, 1679px 753px #FFF, 1596px 1763px #FFF, 2574px 1799px #FFF, 2536px 2464px #FFF, 1037px 2633px #FFF, 1259px 813px #FFF, 2904px 2701px #FFF, 1888px 2578px #FFF, 447px 2841px #FFF, 1806px 999px #FFF, 2105px 2126px #FFF, 38px 2735px #FFF, 721px 1204px #FFF, 865px 1487px #FFF, 1419px 1889px #FFF, 2867px 499px #FFF, 53px 1702px #FFF, 1241px 1114px #FFF, 316px 2852px #FFF, 2113px 445px #FFF, 156px 378px #FFF, 1700px 2734px #FFF, 2501px 716px #FFF, 597px 1097px #FFF, 2651px 2231px #FFF, 1645px 1869px #FFF, 2592px 740px #FFF, 170px 1436px #FFF, 2956px 1806px #FFF, 1903px 1097px #FFF, 1246px 885px #FFF, 1680px 2438px #FFF, 922px 1535px #FFF, 2870px 2154px #FFF, 1456px 501px #FFF, 1445px 609px #FFF, 1934px 72px #FFF, 692px 2032px #FFF, 1291px 1383px #FFF, 1463px 2867px #FFF, 916px 1481px #FFF, 1234px 2844px #FFF, 873px 2014px #FFF, 2141px 1213px #FFF, 1488px 1226px #FFF, 292px 1320px #FFF, 1278px 1364px #FFF, 2668px 2964px #FFF, 1363px 1217px #FFF, 2545px 2552px #FFF, 1831px 1139px #FFF, 142px 2158px #FFF, 2478px 1254px #FFF, 2935px 2184px #FFF, 990px 340px #FFF, 1537px 947px #FFF, 280px 352px #FFF, 2947px 1243px #FFF, 639px 458px #FFF, 1807px 687px #FFF, 2098px 2042px #FFF, 1267px 638px #FFF, 818px 973px #FFF, 986px 1798px #FFF, 456px 1475px #FFF, 1886px 1871px #FFF, 1266px 2511px #FFF, 646px 2877px #FFF, 2491px 1741px #FFF, 1730px 2492px #FFF, 185px 1619px #FFF, 1176px 2486px #FFF, 2534px 1345px #FFF, 176px 2162px #FFF, 2262px 846px #FFF, 1402px 1426px #FFF, 583px 2495px #FFF, 2298px 1162px #FFF, 220px 2029px #FFF, 181px 1820px #FFF, 1643px 1540px #FFF, 2598px 623px #FFF, 1616px 2427px #FFF, 1819px 2771px #FFF, 345px 1051px #FFF, 762px 2038px #FFF, 1862px 698px #FFF, 91px 2269px #FFF, 1275px 2793px #FFF, 700px 2452px #FFF, 155px 495px #FFF, 2741px 2519px #FFF, 674px 201px #FFF, 2218px 1825px #FFF, 1300px 1839px #FFF, 2712px 1671px #FFF, 2486px 977px #FFF, 7px 2773px #FFF, 2089px 1750px #FFF, 1789px 1405px #FFF, 28px 598px #FFF, 1447px 798px #FFF, 2275px 1040px #FFF, 607px 2133px #FFF, 317px 1552px #FFF, 948px 682px #FFF, 1309px 815px #FFF, 887px 940px #FFF, 1787px 1875px #FFF, 536px 773px #FFF, 444px 1355px #FFF, 2898px 2128px #FFF, 1734px 1225px #FFF, 172px 1507px #FFF, 2855px 2311px #FFF, 2583px 685px #FFF, 91px 76px #FFF, 227px 1931px #FFF, 1986px 1554px #FFF, 1891px 198px #FFF, 331px 2450px #FFF, 40px 2652px #FFF, 2784px 2994px #FFF, 1628px 2946px #FFF, 113px 937px #FFF, 483px 68px #FFF, 2900px 2923px #FFF, 521px 2183px #FFF, 2413px 1678px #FFF, 706px 2580px #FFF, 99px 2960px #FFF, 793px 2851px #FFF, 153px 1343px #FFF, 2662px 2451px #FFF, 1146px 1294px #FFF, 2066px 1850px #FFF, 585px 2809px #FFF, 1215px 1042px #FFF, 1900px 1578px #FFF, 1566px 1931px #FFF, 2302px 1463px #FFF, 453px 1316px #FFF, 2512px 1978px #FFF, 2236px 1965px #FFF, 509px 2665px #FFF, 2121px 1455px #FFF, 2166px 1019px #FFF, 309px 2125px #FFF, 2738px 2978px #FFF, 859px 2880px #FFF, 1932px 924px #FFF, 1675px 2985px #FFF, 1472px 2505px #FFF, 349px 2773px #FFF, 1733px 1284px #FFF, 2300px 285px #FFF, 329px 959px #FFF, 212px 1386px #FFF, 135px 1278px #FFF, 2235px 1292px #FFF, 437px 609px #FFF, 2419px 2559px #FFF, 139px 410px #FFF, 2267px 2944px #FFF, 1616px 2415px #FFF, 1895px 2097px #FFF, 484px 668px #FFF, 254px 1409px #FFF, 799px 755px #FFF, 986px 2500px #FFF, 2688px 2983px #FFF, 1027px 2204px #FFF, 897px 2058px #FFF, 203px 1272px #FFF, 808px 1305px #FFF, 2052px 1918px #FFF, 119px 638px #FFF, 963px 2648px #FFF, 1061px 2329px #FFF, 844px 598px #FFF, 2993px 2044px #FFF, 2912px 1089px #FFF, 714px 1932px #FFF, 1420px 2399px #FFF, 505px 2206px #FFF, 854px 1603px #FFF, 2799px 2445px #FFF, 303px 2326px #FFF, 2129px 679px #FFF, 313px 1929px #FFF, 2364px 1051px #FFF, 2134px 205px #FFF, 430px 1891px #FFF, 735px 496px #FFF, 1568px 152px #FFF, 522px 2210px #FFF, 1857px 340px #FFF, 135px 2685px #FFF, 2922px 286px #FFF, 2345px 2358px #FFF, 2538px 2624px #FFF, 1405px 2985px #FFF, 649px 1902px #FFF, 1650px 2284px #FFF, 2348px 1466px #FFF, 367px 978px #FFF, 1537px 2508px #FFF, 685px 161px #FFF, 977px 1173px #FFF, 617px 6px #FFF, 635px 1425px #FFF, 1090px 1647px #FFF, 1975px 2651px #FFF, 1189px 2697px #FFF, 1553px 2588px #FFF, 1290px 2616px #FFF, 138px 447px #FFF, 123px 537px #FFF, 2161px 2979px #FFF, 368px 2099px #FFF, 1297px 211px #FFF, 2049px 322px #FFF, 1916px 1034px #FFF, 2096px 108px #FFF, 695px 326px #FFF, 2065px 155px #FFF, 2199px 986px #FFF, 521px 1391px #FFF, 2287px 378px #FFF, 1132px 2936px #FFF, 1360px 2537px #FFF, 2643px 2556px #FFF, 1847px 1001px #FFF, 1110px 1550px #FFF, 87px 2606px #FFF, 1970px 767px #FFF, 2457px 685px #FFF, 2100px 2028px #FFF, 1815px 1440px #FFF, 405px 329px #FFF, 2258px 2901px #FFF, 361px 2426px #FFF, 292px 418px #FFF, 157px 1471px #FFF, 683px 1183px #FFF, 862px 2951px #FFF, 1564px 1588px #FFF, 2991px 2139px #FFF, 2449px 1716px #FFF, 511px 2297px #FFF, 2674px 2945px #FFF, 2000px 2387px #FFF, 949px 691px #FFF, 503px 2152px #FFF, 2806px 320px #FFF, 585px 1744px #FFF, 2581px 2236px #FFF, 828px 2610px #FFF, 1081px 2277px #FFF, 452px 2128px #FFF, 144px 1925px #FFF, 2966px 1208px #FFF, 2042px 537px #FFF, 1908px 1817px #FFF, 1287px 2212px #FFF, 295px 1751px #FFF, 39px 1773px #FFF, 39px 1168px #FFF, 2174px 458px #FFF, 739px 801px #FFF, 1678px 801px #FFF, 1458px 2136px #FFF, 2960px 237px #FFF, 1209px 1476px #FFF, 249px 97px #FFF, 264px 2976px #FFF, 1017px 973px #FFF, 875px 1164px #FFF, 544px 2392px #FFF, 2511px 2168px #FFF, 2272px 2043px #FFF, 65px 1398px #FFF, 1701px 828px #FFF, 1911px 1086px #FFF, 2977px 668px #FFF, 2595px 2397px #FFF, 1689px 1718px #FFF, 2170px 1761px #FFF, 533px 358px #FFF, 46px 2074px #FFF, 781px 1444px #FFF, 2547px 1867px #FFF, 1805px 179px #FFF, 2670px 869px #FFF, 1698px 2991px #FFF, 225px 1369px #FFF, 1607px 920px #FFF, 217px 2530px #FFF, 1185px 1295px #FFF, 1816px 1357px #FFF, 40px 2857px #FFF, 687px 1186px #FFF, 1977px 649px #FFF, 1820px 2834px #FFF, 643px 2716px #FFF, 1540px 2215px #FFF, 2476px 2504px #FFF, 2555px 551px #FFF, 2281px 2094px #FFF, 272px 2677px #FFF, 1282px 53px #FFF, 986px 1213px #FFF, 481px 1369px #FFF, 251px 263px #FFF, 162px 2189px #FFF, 2197px 1734px #FFF, 273px 1984px #FFF, 417px 1980px #FFF, 1202px 1599px #FFF, 2506px 2829px #FFF, 397px 1308px #FFF, 2624px 2997px #FFF, 723px 2783px #FFF, 1941px 1492px #FFF, 2110px 103px #FFF, 2452px 518px #FFF, 2934px 446px #FFF, 2631px 1884px #FFF, 255px 2971px #FFF, 1787px 537px #FFF, 1032px 1404px #FFF, 2388px 250px #FFF, 2810px 2266px #FFF, 2437px 180px #FFF, 1846px 1215px #FFF, 177px 1694px #FFF, 1932px 2439px #FFF, 1344px 1142px #FFF, 2998px 2148px #FFF, 1237px 2528px #FFF, 1801px 1292px #FFF, 1046px 2635px #FFF, 2317px 651px #FFF, 2620px 1764px #FFF, 2456px 576px #FFF, 2151px 274px #FFF, 1106px 2810px #FFF, 2662px 2171px #FFF, 1454px 77px #FFF, 938px 1226px #FFF, 1838px 305px #FFF, 1914px 192px #FFF, 1603px 1601px #FFF, 1706px 2367px #FFF, 884px 144px #FFF, 842px 1637px #FFF, 1646px 1078px #FFF, 2259px 2073px #FFF, 2720px 952px #FFF, 2719px 2125px #FFF, 384px 1751px #FFF, 1354px 1190px #FFF, 638px 878px #FFF, 1048px 1979px #FFF, 2300px 631px #FFF, 2393px 154px #FFF, 972px 546px #FFF, 1518px 873px #FFF, 2508px 2093px #FFF, 1847px 1219px #FFF, 1548px 2676px #FFF, 2835px 1675px #FFF, 2723px 771px #FFF, 2572px 204px #FFF, 515px 150px #FFF, 1984px 2887px #FFF, 2780px 1126px #FFF, 2996px 131px #FFF, 644px 630px #FFF, 1693px 2671px #FFF, 931px 959px #FFF, 1101px 2405px #FFF, 1984px 2440px #FFF, 2579px 207px #FFF, 1340px 2668px #FFF, 423px 2809px #FFF, 2242px 2973px #FFF, 1817px 1344px #FFF, 2301px 2497px #FFF, 266px 558px #FFF, 1041px 875px #FFF, 1020px 2537px #FFF, 2125px 209px #FFF, 1163px 1335px #FFF, 894px 1749px #FFF, 2543px 1811px #FFF, 1907px 1115px #FFF, 1808px 501px #FFF, 2873px 2746px #FFF, 2654px 267px #FFF, 2648px 2905px #FFF, 2755px 2277px #FFF, 1077px 2622px #FFF, 499px 2041px #FFF, 1085px 743px #FFF, 1757px 439px #FFF, 712px 1533px #FFF, 1456px 1562px #FFF, 1021px 1895px #FFF, 1748px 2809px #FFF, 1487px 2520px #FFF, 2885px 2154px #FFF, 2229px 2183px #FFF, 353px 550px #FFF, 1135px 847px #FFF, 2463px 2397px #FFF, 2925px 1455px #FFF, 907px 1252px #FFF, 1272px 1753px #FFF, 1980px 2167px #FFF, 1035px 233px #FFF, 2049px 286px #FFF, 1035px 2360px #FFF, 393px 1897px #FFF, 2089px 2651px #FFF, 978px 1386px #FFF, 1193px 1925px #FFF, 2239px 2257px #FFF, 1729px 1746px #FFF, 1843px 190px #FFF, 2286px 485px #FFF, 980px 2859px #FFF, 2199px 339px #FFF, 171px 1288px #FFF, 1121px 123px #FFF, 900px 1994px #FFF, 1581px 2896px #FFF, 1922px 1141px #FFF, 2475px 115px #FFF, 2709px 1999px #FFF, 1554px 2201px #FFF, 347px 2536px #FFF, 2254px 1721px #FFF, 978px 1468px #FFF, 2738px 791px #FFF, 2273px 971px #FFF, 1681px 2989px #FFF, 456px 2152px #FFF, 1489px 2282px #FFF, 1131px 1615px #FFF, 372px 241px #FFF, 718px 2971px #FFF, 1797px 801px #FFF, 1620px 2869px #FFF, 2238px 2673px #FFF, 2191px 228px #FFF, 2255px 1417px #FFF, 83px 1002px #FFF, 2679px 967px #FFF, 706px 2614px #FFF, 24px 2612px #FFF, 2672px 2475px #FFF, 690px 2114px #FFF, 2414px 1520px #FFF, 260px 1764px #FFF, 809px 510px #FFF, 1126px 2336px #FFF, 320px 863px #FFF, 1658px 1251px #FFF, 470px 2141px #FFF, 595px 1885px #FFF, 1918px 1191px #FFF, 2159px 87px #FFF, 313px 2595px #FFF, 2731px 1911px #FFF, 2834px 336px #FFF, 526px 2266px #FFF, 798px 421px #FFF, 2147px 617px #FFF, 1812px 1293px #FFF, 1479px 36px #FFF, 2620px 1280px #FFF, 419px 2871px #FFF, 1482px 2908px #FFF, 326px 2630px #FFF, 1054px 2075px #FFF, 2494px 1493px #FFF, 736px 1250px #FFF, 1002px 2879px #FFF, 858px 2581px #FFF, 48px 2949px #FFF, 409px 2153px #FFF, 1041px 512px #FFF, 2370px 2942px #FFF, 1273px 467px #FFF, 438px 855px #FFF, 1430px 2987px #FFF, 1205px 416px #FFF, 2083px 363px #FFF, 2485px 2405px #FFF, 500px 237px #FFF, 1220px 1987px #FFF, 204px 50px #FFF, 1618px 462px #FFF, 1969px 187px #FFF, 397px 112px #FFF, 2313px 1876px #FFF, 1002px 473px #FFF, 1254px 2903px #FFF, 970px 473px #FFF, 2411px 2809px #FFF, 639px 1043px #FFF, 2530px 2189px #FFF, 2030px 866px #FFF, 1028px 247px #FFF, 2292px 1621px #FFF, 1694px 707px #FFF, 1039px 1739px #FFF, 2197px 151px #FFF, 1607px 2887px #FFF, 2308px 2810px #FFF, 2423px 2017px #FFF, 1866px 2891px #FFF, 800px 1452px #FFF, 1372px 1503px #FFF, 293px 500px #FFF, 2840px 579px #FFF, 2966px 1225px #FFF, 28px 1157px #FFF, 2587px 1368px #FFF, 1714px 322px #FFF, 168px 2527px #FFF, 1659px 772px #FFF, 550px 1764px #FFF, 2470px 1939px #FFF, 1964px 267px #FFF, 2861px 1967px #FFF, 225px 2472px #FFF, 1507px 2500px #FFF, 1572px 782px #FFF, 832px 2401px #FFF, 849px 351px #FFF, 46px 899px #FFF, 1108px 189px #FFF, 1233px 163px #FFF, 2377px 641px #FFF, 235px 759px #FFF, 1690px 493px #FFF, 124px 2053px #FFF, 2883px 997px #FFF, 2831px 863px #FFF, 18px 149px #FFF, 498px 2802px #FFF, 652px 1070px #FFF, 1859px 1045px #FFF, 2907px 2665px #FFF, 1094px 385px #FFF, 2818px 1557px #FFF, 2499px 2697px #FFF, 1980px 913px #FFF, 62px 2883px #FFF, 1499px 2230px #FFF, 2311px 1565px #FFF, 938px 605px #FFF, 2397px 2622px #FFF, 2716px 920px #FFF, 228px 1048px #FFF, 359px 2328px #FFF, 2500px 1565px #FFF, 423px 2590px #FFF, 1306px 1988px #FFF, 1236px 1843px #FFF, 665px 2077px #FFF, 1311px 2347px #FFF, 989px 1300px #FFF, 2924px 1668px #FFF, 2671px 673px #FFF, 293px 819px #FFF, 1018px 1583px #FFF, 913px 1749px #FFF, 1172px 964px #FFF, 2350px 2256px #FFF, 2484px 1174px #FFF, 51px 2670px #FFF, 489px 443px #FFF, 1633px 182px #FFF, 863px 1242px #FFF, 1036px 1693px #FFF, 304px 1534px #FFF, 2880px 1776px #FFF, 431px 2185px #FFF, 1864px 482px #FFF, 98px 2999px #FFF;
        }
        #stars2 {
            width: 2px; height: 2px;
            box-shadow: 2862px 731px #FFF, 2441px 655px #FFF, 2445px 1609px #FFF, 2555px 165px #FFF, 137px 2597px #FFF, 813px 1511px #FFF, 2139px 1420px #FFF, 815px 990px #FFF, 2208px 1849px #FFF, 271px 535px #FFF, 1459px 1998px #FFF, 597px 1855px #FFF, 2335px 1000px #FFF, 2719px 2840px #FFF, 893px 2123px #FFF, 1356px 381px #FFF, 1892px 1166px #FFF, 2624px 2888px #FFF, 1559px 2120px #FFF, 86px 3px #FFF, 2700px 2699px #FFF, 764px 1095px #FFF, 2759px 1510px #FFF, 2332px 1473px #FFF, 1867px 2115px #FFF, 834px 2969px #FFF, 1638px 2292px #FFF, 479px 2119px #FFF, 1192px 946px #FFF, 113px 2969px #FFF, 1800px 1023px #FFF, 217px 1989px #FFF, 723px 1388px #FFF, 2899px 2355px #FFF, 1962px 2832px #FFF, 1898px 1685px #FFF, 69px 2407px #FFF, 1494px 2486px #FFF, 157px 1506px #FFF, 344px 2805px #FFF, 458px 947px #FFF, 2835px 1466px #FFF, 996px 2006px #FFF, 1817px 2072px #FFF, 2875px 2160px #FFF, 2981px 2821px #FFF, 1399px 2249px #FFF, 1829px 942px #FFF, 314px 2511px #FFF, 2011px 2508px #FFF, 2577px 1265px #FFF, 2471px 1454px #FFF, 117px 553px #FFF, 1937px 1274px #FFF, 2174px 2015px #FFF, 1031px 1606px #FFF, 209px 2176px #FFF, 1297px 1141px #FFF, 2901px 1985px #FFF, 208px 2205px #FFF, 2622px 2855px #FFF, 2315px 1279px #FFF, 2178px 563px #FFF, 262px 1201px #FFF, 1800px 1403px #FFF, 979px 14px #FFF, 2329px 2060px #FFF, 2353px 711px #FFF, 2725px 1721px #FFF, 795px 1938px #FFF, 1287px 745px #FFF, 1110px 959px #FFF, 799px 1739px #FFF, 513px 781px #FFF, 2277px 2166px #FFF, 620px 2192px #FFF, 2047px 1715px #FFF, 2200px 749px #FFF, 960px 2554px #FFF, 1802px 1661px #FFF, 2943px 2042px #FFF, 2049px 1731px #FFF, 2516px 1197px #FFF, 502px 1832px #FFF, 929px 1836px #FFF, 2037px 2302px #FFF, 2507px 2593px #FFF, 86px 2237px #FFF, 393px 2432px #FFF, 2799px 1918px #FFF, 2360px 471px #FFF, 2641px 1938px #FFF, 1620px 783px #FFF, 1946px 2571px #FFF, 952px 2324px #FFF, 2022px 399px #FFF, 584px 751px #FFF, 354px 1621px #FFF, 538px 317px #FFF, 1034px 542px #FFF, 180px 928px #FFF, 1456px 2431px #FFF, 597px 2425px #FFF, 2116px 1578px #FFF, 239px 922px #FFF, 1476px 677px #FFF, 1689px 1329px #FFF, 2351px 1096px #FFF, 454px 802px #FFF, 1929px 2071px #FFF, 1951px 2331px #FFF, 1940px 1589px #FFF, 2100px 611px #FFF, 1532px 1371px #FFF, 1430px 140px #FFF, 2607px 1339px #FFF, 2719px 127px #FFF, 663px 192px #FFF, 2211px 2085px #FFF, 1805px 1936px #FFF, 2565px 1252px #FFF, 1004px 1508px #FFF, 2268px 1903px #FFF, 178px 1599px #FFF, 721px 2568px #FFF, 2921px 2798px #FFF, 2759px 1669px #FFF, 43px 2589px #FFF, 99px 986px #FFF, 1992px 175px #FFF, 1821px 834px #FFF, 83px 530px #FFF, 2028px 2566px #FFF, 1654px 2339px #FFF, 1384px 2484px #FFF, 1787px 641px #FFF, 1830px 449px #FFF, 1054px 2770px #FFF, 883px 776px #FFF, 2081px 1378px #FFF, 2138px 924px #FFF, 1392px 150px #FFF, 356px 464px #FFF, 230px 1944px #FFF, 1033px 2963px #FFF, 1417px 2808px #FFF, 2937px 730px #FFF, 2597px 95px #FFF, 863px 1937px #FFF, 859px 2800px #FFF, 371px 2765px #FFF, 2359px 1513px #FFF, 1223px 2552px #FFF, 314px 2380px #FFF, 2158px 2021px #FFF, 683px 688px #FFF, 2816px 2658px #FFF, 2575px 2889px #FFF, 135px 2751px #FFF, 2350px 3000px #FFF, 1832px 2621px #FFF, 986px 639px #FFF, 1392px 2208px #FFF, 622px 2864px #FFF, 759px 1846px #FFF, 1006px 1825px #FFF, 2037px 2157px #FFF, 811px 2664px #FFF, 2383px 1048px #FFF, 1204px 1681px #FFF, 2789px 285px #FFF, 2156px 67px #FFF, 517px 357px #FFF, 363px 102px #FFF, 2449px 2865px #FFF, 651px 2213px #FFF, 1267px 2169px #FFF, 1247px 1382px #FFF, 953px 1843px #FFF, 2157px 2059px #FFF, 1530px 1555px #FFF, 121px 2051px #FFF, 2526px 2390px #FFF, 1337px 2627px #FFF, 791px 2986px #FFF, 1130px 1721px #FFF, 1926px 2367px #FFF, 2352px 2795px #FFF, 1661px 369px #FFF, 2438px 2503px #FFF, 650px 2029px #FFF, 652px 2308px #FFF, 2766px 493px #FFF, 902px 235px #FFF, 2438px 1227px #FFF, 810px 2927px #FFF, 2924px 2495px #FFF, 511px 1610px #FFF, 702px 2181px #FFF, 1077px 1140px #FFF, 1868px 2474px #FFF, 2980px 1906px #FFF, 647px 165px #FFF, 1727px 1057px #FFF, 1864px 1967px #FFF, 2084px 1629px #FFF, 2173px 1854px #FFF, 2234px 1699px #FFF, 2449px 1771px #FFF, 2465px 2738px #FFF, 947px 1692px #FFF, 351px 840px #FFF, 767px 1568px #FFF, 2077px 661px #FFF, 2998px 1382px #FFF, 1850px 867px #FFF, 2966px 2657px #FFF, 1250px 2706px #FFF, 141px 200px #FFF, 2116px 469px #FFF, 2394px 1052px #FFF, 1519px 1305px #FFF, 1070px 1960px #FFF, 2623px 1022px #FFF, 2327px 1432px #FFF, 2843px 1006px #FFF, 2860px 2506px #FFF, 2981px 774px #FFF, 801px 2370px #FFF, 2793px 2492px #FFF, 2848px 1420px #FFF, 896px 615px #FFF, 2583px 537px #FFF, 1890px 1140px #FFF, 684px 344px #FFF, 786px 1086px #FFF, 688px 1324px #FFF, 617px 2798px #FFF, 2464px 1205px #FFF, 2538px 284px #FFF, 917px 1846px #FFF, 2551px 1004px #FFF, 474px 177px #FFF, 1250px 1804px #FFF, 1418px 790px #FFF, 1710px 2959px #FFF, 2442px 2565px #FFF, 2823px 2104px #FFF, 1972px 1034px #FFF, 185px 2887px #FFF, 2970px 2125px #FFF, 328px 3000px #FFF, 1549px 2088px #FFF, 2228px 2259px #FFF, 871px 348px #FFF, 2925px 1027px #FFF, 2946px 1621px #FFF, 499px 2146px #FFF, 1416px 2172px #FFF, 854px 1899px #FFF, 1579px 2409px #FFF, 995px 2745px #FFF, 2291px 630px #FFF, 300px 1621px #FFF, 912px 1564px #FFF, 2934px 816px #FFF, 381px 893px #FFF, 545px 189px #FFF, 564px 79px #FFF, 1742px 1889px #FFF, 317px 493px #FFF, 2668px 2823px #FFF, 751px 703px #FFF, 1523px 2159px #FFF, 1316px 2608px #FFF, 2734px 1099px #FFF, 240px 124px #FFF, 2128px 1445px #FFF, 71px 1822px #FFF, 2993px 923px #FFF, 1563px 2485px #FFF, 1617px 1578px #FFF, 2805px 396px #FFF, 460px 1293px #FFF, 1584px 865px #FFF, 1412px 101px #FFF, 2880px 1476px #FFF, 2454px 1880px #FFF, 1078px 1005px #FFF, 1713px 370px #FFF, 377px 1501px #FFF, 2692px 1852px #FFF, 2759px 998px #FFF, 1738px 2426px #FFF, 134px 1496px #FFF, 678px 1185px #FFF, 2904px 1237px #FFF, 73px 2519px #FFF, 2051px 342px #FFF, 2220px 2175px #FFF;
            animation: animStar 100s linear infinite;
        }
        #stars2::after {
            content: " "; position: absolute; top: 3000px;
            width: 2px; height: 2px; box-shadow: 2862px 731px #FFF, 2441px 655px #FFF, 2445px 1609px #FFF, 2555px 165px #FFF, 137px 2597px #FFF, 813px 1511px #FFF, 2139px 1420px #FFF, 815px 990px #FFF, 2208px 1849px #FFF, 271px 535px #FFF, 1459px 1998px #FFF, 597px 1855px #FFF, 2335px 1000px #FFF, 2719px 2840px #FFF, 893px 2123px #FFF, 1356px 381px #FFF, 1892px 1166px #FFF, 2624px 2888px #FFF, 1559px 2120px #FFF, 86px 3px #FFF, 2700px 2699px #FFF, 764px 1095px #FFF, 2759px 1510px #FFF, 2332px 1473px #FFF, 1867px 2115px #FFF, 834px 2969px #FFF, 1638px 2292px #FFF, 479px 2119px #FFF, 1192px 946px #FFF, 113px 2969px #FFF, 1800px 1023px #FFF, 217px 1989px #FFF, 723px 1388px #FFF, 2899px 2355px #FFF, 1962px 2832px #FFF, 1898px 1685px #FFF, 69px 2407px #FFF, 1494px 2486px #FFF, 157px 1506px #FFF, 344px 2805px #FFF, 458px 947px #FFF, 2835px 1466px #FFF, 996px 2006px #FFF, 1817px 2072px #FFF, 2875px 2160px #FFF, 2981px 2821px #FFF, 1399px 2249px #FFF, 1829px 942px #FFF, 314px 2511px #FFF, 2011px 2508px #FFF, 2577px 1265px #FFF, 2471px 1454px #FFF, 117px 553px #FFF, 1937px 1274px #FFF, 2174px 2015px #FFF, 1031px 1606px #FFF, 209px 2176px #FFF, 1297px 1141px #FFF, 2901px 1985px #FFF, 208px 2205px #FFF, 2622px 2855px #FFF, 2315px 1279px #FFF, 2178px 563px #FFF, 262px 1201px #FFF, 1800px 1403px #FFF, 979px 14px #FFF, 2329px 2060px #FFF, 2353px 711px #FFF, 2725px 1721px #FFF, 795px 1938px #FFF, 1287px 745px #FFF, 1110px 959px #FFF, 799px 1739px #FFF, 513px 781px #FFF, 2277px 2166px #FFF, 620px 2192px #FFF, 2047px 1715px #FFF, 2200px 749px #FFF, 960px 2554px #FFF, 1802px 1661px #FFF, 2943px 2042px #FFF, 2049px 1731px #FFF, 2516px 1197px #FFF, 502px 1832px #FFF, 929px 1836px #FFF, 2037px 2302px #FFF, 2507px 2593px #FFF, 86px 2237px #FFF, 393px 2432px #FFF, 2799px 1918px #FFF, 2360px 471px #FFF, 2641px 1938px #FFF, 1620px 783px #FFF, 1946px 2571px #FFF, 952px 2324px #FFF, 2022px 399px #FFF, 584px 751px #FFF, 354px 1621px #FFF, 538px 317px #FFF, 1034px 542px #FFF, 180px 928px #FFF, 1456px 2431px #FFF, 597px 2425px #FFF, 2116px 1578px #FFF, 239px 922px #FFF, 1476px 677px #FFF, 1689px 1329px #FFF, 2351px 1096px #FFF, 454px 802px #FFF, 1929px 2071px #FFF, 1951px 2331px #FFF, 1940px 1589px #FFF, 2100px 611px #FFF, 1532px 1371px #FFF, 1430px 140px #FFF, 2607px 1339px #FFF, 2719px 127px #FFF, 663px 192px #FFF, 2211px 2085px #FFF, 1805px 1936px #FFF, 2565px 1252px #FFF, 1004px 1508px #FFF, 2268px 1903px #FFF, 178px 1599px #FFF, 721px 2568px #FFF, 2921px 2798px #FFF, 2759px 1669px #FFF, 43px 2589px #FFF, 99px 986px #FFF, 1992px 175px #FFF, 1821px 834px #FFF, 83px 530px #FFF, 2028px 2566px #FFF, 1654px 2339px #FFF, 1384px 2484px #FFF, 1787px 641px #FFF, 1830px 449px #FFF, 1054px 2770px #FFF, 883px 776px #FFF, 2081px 1378px #FFF, 2138px 924px #FFF, 1392px 150px #FFF, 356px 464px #FFF, 230px 1944px #FFF, 1033px 2963px #FFF, 1417px 2808px #FFF, 2937px 730px #FFF, 2597px 95px #FFF, 863px 1937px #FFF, 859px 2800px #FFF, 371px 2765px #FFF, 2359px 1513px #FFF, 1223px 2552px #FFF, 314px 2380px #FFF, 2158px 2021px #FFF, 683px 688px #FFF, 2816px 2658px #FFF, 2575px 2889px #FFF, 135px 2751px #FFF, 2350px 3000px #FFF, 1832px 2621px #FFF, 986px 639px #FFF, 1392px 2208px #FFF, 622px 2864px #FFF, 759px 1846px #FFF, 1006px 1825px #FFF, 2037px 2157px #FFF, 811px 2664px #FFF, 2383px 1048px #FFF, 1204px 1681px #FFF, 2789px 285px #FFF, 2156px 67px #FFF, 517px 357px #FFF, 363px 102px #FFF, 2449px 2865px #FFF, 651px 2213px #FFF, 1267px 2169px #FFF, 1247px 1382px #FFF, 953px 1843px #FFF, 2157px 2059px #FFF, 1530px 1555px #FFF, 121px 2051px #FFF, 2526px 2390px #FFF, 1337px 2627px #FFF, 791px 2986px #FFF, 1130px 1721px #FFF, 1926px 2367px #FFF, 2352px 2795px #FFF, 1661px 369px #FFF, 2438px 2503px #FFF, 650px 2029px #FFF, 652px 2308px #FFF, 2766px 493px #FFF, 902px 235px #FFF, 2438px 1227px #FFF, 810px 2927px #FFF, 2924px 2495px #FFF, 511px 1610px #FFF, 702px 2181px #FFF, 1077px 1140px #FFF, 1868px 2474px #FFF, 2980px 1906px #FFF, 647px 165px #FFF, 1727px 1057px #FFF, 1864px 1967px #FFF, 2084px 1629px #FFF, 2173px 1854px #FFF, 2234px 1699px #FFF, 2449px 1771px #FFF, 2465px 2738px #FFF, 947px 1692px #FFF, 351px 840px #FFF, 767px 1568px #FFF, 2077px 661px #FFF, 2998px 1382px #FFF, 1850px 867px #FFF, 2966px 2657px #FFF, 1250px 2706px #FFF, 141px 200px #FFF, 2116px 469px #FFF, 2394px 1052px #FFF, 1519px 1305px #FFF, 1070px 1960px #FFF, 2623px 1022px #FFF, 2327px 1432px #FFF, 2843px 1006px #FFF, 2860px 2506px #FFF, 2981px 774px #FFF, 801px 2370px #FFF, 2793px 2492px #FFF, 2848px 1420px #FFF, 896px 615px #FFF, 2583px 537px #FFF, 1890px 1140px #FFF, 684px 344px #FFF, 786px 1086px #FFF, 688px 1324px #FFF, 617px 2798px #FFF, 2464px 1205px #FFF, 2538px 284px #FFF, 917px 1846px #FFF, 2551px 1004px #FFF, 474px 177px #FFF, 1250px 1804px #FFF, 1418px 790px #FFF, 1710px 2959px #FFF, 2442px 2565px #FFF, 2823px 2104px #FFF, 1972px 1034px #FFF, 185px 2887px #FFF, 2970px 2125px #FFF, 328px 3000px #FFF, 1549px 2088px #FFF, 2228px 2259px #FFF, 871px 348px #FFF, 2925px 1027px #FFF, 2946px 1621px #FFF, 499px 2146px #FFF, 1416px 2172px #FFF, 854px 1899px #FFF, 1579px 2409px #FFF, 995px 2745px #FFF, 2291px 630px #FFF, 300px 1621px #FFF, 912px 1564px #FFF, 2934px 816px #FFF, 381px 893px #FFF, 545px 189px #FFF, 564px 79px #FFF, 1742px 1889px #FFF, 317px 493px #FFF, 2668px 2823px #FFF, 751px 703px #FFF, 1523px 2159px #FFF, 1316px 2608px #FFF, 2734px 1099px #FFF, 240px 124px #FFF, 2128px 1445px #FFF, 71px 1822px #FFF, 2993px 923px #FFF, 1563px 2485px #FFF, 1617px 1578px #FFF, 2805px 396px #FFF, 460px 1293px #FFF, 1584px 865px #FFF, 1412px 101px #FFF, 2880px 1476px #FFF, 2454px 1880px #FFF, 1078px 1005px #FFF, 1713px 370px #FFF, 377px 1501px #FFF, 2692px 1852px #FFF, 2759px 998px #FFF, 1738px 2426px #FFF, 134px 1496px #FFF, 678px 1185px #FFF, 2904px 1237px #FFF, 73px 2519px #FFF, 2051px 342px #FFF, 2220px 2175px #FFF;
        }
        #stars3 {
            width: 3px; height: 3px;
            box-shadow: 2859px 612px #FFF, 1469px 2215px #FFF, 704px 2799px #FFF, 1559px 2266px #FFF, 1609px 2197px #FFF, 2989px 2953px #FFF, 11px 1502px #FFF, 1029px 418px #FFF, 2770px 1635px #FFF, 1240px 1655px #FFF, 1486px 569px #FFF, 921px 2452px #FFF, 2169px 1920px #FFF, 2194px 880px #FFF, 2917px 251px #FFF, 1564px 1438px #FFF, 1866px 1408px #FFF, 2930px 2349px #FFF, 2867px 227px #FFF, 2132px 499px #FFF, 1719px 1154px #FFF, 1901px 762px #FFF, 555px 191px #FFF, 2568px 2970px #FFF, 1431px 1467px #FFF, 2414px 1544px #FFF, 1047px 2341px #FFF, 602px 1344px #FFF, 1764px 763px #FFF, 406px 1700px #FFF, 2177px 2788px #FFF, 2935px 877px #FFF, 322px 2127px #FFF, 2833px 1936px #FFF, 982px 734px #FFF, 1783px 1982px #FFF, 2525px 2462px #FFF, 675px 1672px #FFF, 2561px 2018px #FFF, 1249px 2024px #FFF, 158px 442px #FFF, 291px 1492px #FFF, 1912px 2114px #FFF, 2824px 821px #FFF, 2882px 1057px #FFF, 462px 1216px #FFF, 1868px 2966px #FFF, 1479px 1532px #FFF, 2572px 753px #FFF, 1444px 2513px #FFF, 2303px 686px #FFF, 2723px 1645px #FFF, 2818px 2091px #FFF, 2243px 1286px #FFF, 1621px 2452px #FFF, 1941px 2971px #FFF, 1557px 1729px #FFF, 2609px 932px #FFF, 960px 2089px #FFF, 559px 2352px #FFF, 2899px 1034px #FFF, 317px 1737px #FFF, 2702px 305px #FFF, 1011px 1865px #FFF, 980px 682px #FFF, 1033px 2673px #FFF, 1858px 2111px #FFF, 997px 2724px #FFF, 496px 1996px #FFF, 1048px 1401px #FFF, 2719px 64px #FFF, 2440px 502px #FFF, 2586px 268px #FFF, 2018px 1569px #FFF, 2704px 2752px #FFF, 2526px 2455px #FFF, 2630px 1385px #FFF, 2979px 2124px #FFF, 686px 2751px #FFF, 1469px 27px #FFF, 2121px 1254px #FFF, 1513px 1337px #FFF, 1267px 2479px #FFF, 2407px 733px #FFF, 59px 1678px #FFF, 1051px 1246px #FFF, 442px 993px #FFF, 1726px 1755px #FFF, 818px 1209px #FFF, 500px 1817px #FFF, 1344px 1462px #FFF, 2468px 1774px #FFF, 1412px 456px #FFF, 1640px 2300px #FFF, 287px 1455px #FFF, 68px 1820px #FFF, 2940px 2538px #FFF, 681px 1173px #FFF, 2856px 697px #FFF, 2178px 1680px #FFF;
            animation: animStar 50s linear infinite;
        }
        #stars3::after {
            content: " "; position: absolute; top: 3000px;
            width: 3px; height: 3px; box-shadow: 2859px 612px #FFF, 1469px 2215px #FFF, 704px 2799px #FFF, 1559px 2266px #FFF, 1609px 2197px #FFF, 2989px 2953px #FFF, 11px 1502px #FFF, 1029px 418px #FFF, 2770px 1635px #FFF, 1240px 1655px #FFF, 1486px 569px #FFF, 921px 2452px #FFF, 2169px 1920px #FFF, 2194px 880px #FFF, 2917px 251px #FFF, 1564px 1438px #FFF, 1866px 1408px #FFF, 2930px 2349px #FFF, 2867px 227px #FFF, 2132px 499px #FFF, 1719px 1154px #FFF, 1901px 762px #FFF, 555px 191px #FFF, 2568px 2970px #FFF, 1431px 1467px #FFF, 2414px 1544px #FFF, 1047px 2341px #FFF, 602px 1344px #FFF, 1764px 763px #FFF, 406px 1700px #FFF, 2177px 2788px #FFF, 2935px 877px #FFF, 322px 2127px #FFF, 2833px 1936px #FFF, 982px 734px #FFF, 1783px 1982px #FFF, 2525px 2462px #FFF, 675px 1672px #FFF, 2561px 2018px #FFF, 1249px 2024px #FFF, 158px 442px #FFF, 291px 1492px #FFF, 1912px 2114px #FFF, 2824px 821px #FFF, 2882px 1057px #FFF, 462px 1216px #FFF, 1868px 2966px #FFF, 1479px 1532px #FFF, 2572px 753px #FFF, 1444px 2513px #FFF, 2303px 686px #FFF, 2723px 1645px #FFF, 2818px 2091px #FFF, 2243px 1286px #FFF, 1621px 2452px #FFF, 1941px 2971px #FFF, 1557px 1729px #FFF, 2609px 932px #FFF, 960px 2089px #FFF, 559px 2352px #FFF, 2899px 1034px #FFF, 317px 1737px #FFF, 2702px 305px #FFF, 1011px 1865px #FFF, 980px 682px #FFF, 1033px 2673px #FFF, 1858px 2111px #FFF, 997px 2724px #FFF, 496px 1996px #FFF, 1048px 1401px #FFF, 2719px 64px #FFF, 2440px 502px #FFF, 2586px 268px #FFF, 2018px 1569px #FFF, 2704px 2752px #FFF, 2526px 2455px #FFF, 2630px 1385px #FFF, 2979px 2124px #FFF, 686px 2751px #FFF, 1469px 27px #FFF, 2121px 1254px #FFF, 1513px 1337px #FFF, 1267px 2479px #FFF, 2407px 733px #FFF, 59px 1678px #FFF, 1051px 1246px #FFF, 442px 993px #FFF, 1726px 1755px #FFF, 818px 1209px #FFF, 500px 1817px #FFF, 1344px 1462px #FFF, 2468px 1774px #FFF, 1412px 456px #FFF, 1640px 2300px #FFF, 287px 1455px #FFF, 68px 1820px #FFF, 2940px 2538px #FFF, 681px 1173px #FFF, 2856px 697px #FFF, 2178px 1680px #FFF;
        }
        
        @keyframes animStar {
            from { transform: translateY(0px) }
            to { transform: translateY(-3000px) }
        }

        /* Estrellas Fugaces */
        .shooting-star {
            position: absolute;
            width: 4px; height: 4px;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 0 0 4px rgba(255,255,255,0.1), 0 0 0 8px rgba(255,255,255,0.1), 0 0 20px rgba(255,255,255,1);
            animation: shooting 4s linear infinite;
            opacity: 0;
            z-index: 2;
        }
        .shooting-star::before {
            content: '';
            position: absolute;
            top: 50%; transform: translateY(-50%);
            width: 150px; height: 1px;
            background: linear-gradient(90deg, #fff, transparent);
        }
        .ss-1 { top: 10%; left: 80%; animation-delay: 0s; }
        .ss-2 { top: 40%; left: 60%; animation-delay: 2s; }
        .ss-3 { top: 70%; left: 90%; animation-delay: 1.5s; }
        .ss-4 { top: 20%; left: 40%; animation-delay: 3.5s; }
        
        @keyframes shooting {
            0% { transform: translateX(0) translateY(0) rotate(-45deg); opacity: 1; }
            100% { transform: translateX(-1000px) translateY(1000px) rotate(-45deg); opacity: 0; }
        }

        /* Nebulosas CSS */
        .nebula {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.4;
            z-index: 1;
            pointer-events: none;
        }
        .nebula-1 { top: 10%; left: -10%; width: 500px; height: 500px; background: #8B5CF6; animation: pulse-nebula 20s infinite alternate; }
        .nebula-2 { top: 0%; right: -10%; width: 300px; height: 300px; background: #00F0FF; animation: pulse-nebula 25s infinite alternate-reverse; }
        .nebula-3 { top: 80%; left: 40%; width: 400px; height: 400px; background: #DB2777; animation: pulse-nebula 15s infinite alternate; }

        @keyframes pulse-nebula {
            0% { transform: scale(1); opacity: 0.2; }
            100% { transform: scale(1.1); opacity: 0.5; }
        }

        /* Planetas CSS */
        .planet {
            position: absolute;
            border-radius: 50%;
            z-index: 2;
            animation: float-planet 15s ease-in-out infinite;
        }
        /* Planetas del Hero */
        .planet-1 {
            width: 150px; height: 150px;
            top: 15%; right: 10%;
            background: radial-gradient(circle at 30% 30%, #8B5CF6, #2D3559, #05060B);
            box-shadow: 0 0 40px rgba(139, 92, 246, 0.4), inset -20px -20px 40px rgba(0,0,0,0.8);
        }
        .planet-1::after {
            content: ''; position: absolute; top: 50%; left: 50%;
            width: 250px; height: 60px; border-radius: 50%;
            border: 8px solid rgba(255,255,255,0.1);
            border-bottom-color: rgba(139, 92, 246, 0.5);
            border-right-color: rgba(139, 92, 246, 0.3);
            transform: translate(-50%, -50%) rotate(-20deg);
            box-shadow: 0 0 15px rgba(139, 92, 246, 0.2);
        }
        .planet-2 {
            width: 80px; height: 80px;
            bottom: 25%; left: 15%;
            background: radial-gradient(circle at 30% 30%, #00F0FF, #006066, #05060B);
            box-shadow: 0 0 30px rgba(0, 240, 255, 0.3), inset -10px -10px 20px rgba(0,0,0,0.8);
            animation-duration: 20s; animation-delay: -5s;
        }
        
        /* Planetas Nuevos Esparcidos */
        .planet-3 {
            width: 120px; height: 120px;
            top: 120vh; left: 5%;
            background: radial-gradient(circle at 30% 30%, #F59E0B, #92400E, #05060B);
            box-shadow: 0 0 40px rgba(245, 158, 11, 0.4), inset -20px -20px 40px rgba(0,0,0,0.8);
            animation-duration: 25s; animation-delay: -2s;
        }
        .planet-4 {
            width: 200px; height: 200px;
            top: 250vh; right: -5%;
            background: radial-gradient(circle at 30% 30%, #DB2777, #831843, #05060B);
            box-shadow: 0 0 60px rgba(219, 39, 119, 0.3), inset -30px -30px 60px rgba(0,0,0,0.9);
            animation-duration: 30s;
        }
        .planet-4::after {
            content: ''; position: absolute; top: 50%; left: 50%;
            width: 320px; height: 80px; border-radius: 50%;
            border: 4px solid rgba(255,255,255,0.05);
            border-top-color: rgba(219, 39, 119, 0.6);
            border-left-color: rgba(219, 39, 119, 0.4);
            transform: translate(-50%, -50%) rotate(15deg);
            box-shadow: 0 0 20px rgba(219, 39, 119, 0.3);
        }
        .planet-5 {
            width: 60px; height: 60px;
            top: 380vh; left: 20%;
            background: radial-gradient(circle at 30% 30%, #10B981, #065F46, #05060B);
            box-shadow: 0 0 25px rgba(16, 185, 129, 0.4), inset -10px -10px 20px rgba(0,0,0,0.8);
            animation-duration: 18s; animation-delay: -10s;
        }
        .planet-6 {
            width: 100px; height: 100px;
            top: 480vh; right: 15%;
            background: radial-gradient(circle at 30% 30%, #3B82F6, #1E3A8A, #05060B);
            box-shadow: 0 0 35px rgba(59, 130, 246, 0.4), inset -15px -15px 30px rgba(0,0,0,0.8);
            animation-duration: 22s; animation-delay: -7s;
        }
        
        @keyframes float-planet {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(5deg); }
        }
        
        h1, h2, h3, h4 { font-family: 'Archivo', sans-serif; }
        
        /* Contenedor relativo global para que los elementos no afecten el layout */
        .space-container { position: relative; overflow: visible; z-index: 1; }
    </style>


</head>
<body class="bg-space-900 text-gray-100 font-body antialiased selection:bg-accent selection:text-white relative overflow-x-hidden">
    <!-- Fondo Espacial Fijo y Elementos Esparcidos -->
    <div class="fixed inset-0 z-[-1] pointer-events-none overflow-hidden" style="height: 100vh;">
        <!-- Estrellas Parallax -->
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        
        <!-- Nebulosas Estáticas/Pulsantes -->
        <div class="nebula nebula-1"></div>
        <div class="nebula nebula-2"></div>
        <div class="nebula nebula-3"></div>
        
        <!-- Estrellas Fugaces -->
        <div class="shooting-star ss-1"></div>
        <div class="shooting-star ss-2"></div>
        <div class="shooting-star ss-3"></div>
        <div class="shooting-star ss-4"></div>
        
        <!-- Nebulosa de fondo global -->
        <div class="absolute inset-0 bg-nebula mix-blend-screen opacity-50"></div>
    </div>
    
    <!-- Contenedor absoluto para elementos esparcidos en toda la altura de la pagina -->
    <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden" style="height: 600vh;">
        <div class="planet planet-3"></div>
        <div class="planet planet-4"></div>
        <div class="planet planet-5"></div>
        <div class="planet planet-6"></div>
    </div>

    <!-- Navegación -->
    <nav class="fixed w-full z-50 glass">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold font-sans tracking-tight flex items-center gap-2"><i class="fas fa-meteor text-cyan"></i><span class="text-white">Juan Diego</span><span class="text-accent">Vega</span></a>
            <div class="hidden md:flex space-x-8">
                <a href="#sobre-mi" class="text-gray-300 hover:text-cyan transition-colors duration-300">Sobre mí</a>
                <a href="#habilidades" class="text-gray-300 hover:text-cyan transition-colors duration-300">Habilidades</a>
                <a href="#proyectos" class="text-gray-300 hover:text-cyan transition-colors duration-300">Proyectos</a>
                <a href="#certificaciones" class="text-gray-300 hover:text-cyan transition-colors duration-300">Certificaciones</a>
                <a href="#contacto" class="text-gray-300 hover:text-cyan transition-colors duration-300">Contacto</a>
            </div>
            <!-- Botón móvil -->
            <button class="md:hidden text-gray-300 hover:text-cyan">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Espacial -->
    <section id="hero" class="min-h-screen relative overflow-hidden flex items-center justify-center">

        <!-- Planetas CSS Decorativos -->
        <div class="planet planet-1"></div>
        <div class="planet planet-2"></div>
        
        <!-- Capa de contenido principal -->
        <div class="relative container mx-auto px-6 text-center" style="z-index: 10;">
            <div class="inline-block relative mb-4">
                <span class="px-4 py-1.5 rounded-full border border-cyan/30 bg-cyan/10 text-cyan text-sm font-medium tracking-widest uppercase backdrop-blur-md">
                    Ingeniero de Sistemas
                </span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight font-sans">
                Explorando el <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan to-accent">Universo Digital</span>
            </h1>
            
            <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 font-light leading-relaxed">
                Desarrollador apasionado por crear ecosistemas tecnológicos, desde la profundidad del backend hasta la brillantez de la interfaz de usuario.
            </p>
            
            <div class="flex flex-col md:flex-row justify-center gap-6 pt-4">
                <a href="#proyectos" class="px-8 py-3.5 bg-gradient-to-r from-accent to-accent-purple text-white font-semibold rounded-full hover:shadow-[0_0_20px_rgba(139,92,246,0.5)] transition-all duration-300 transform hover:-translate-y-1">
                    <i class="fas fa-rocket mr-2"></i> Iniciar Misión
                </a>
                <a href="#contacto" class="px-8 py-3.5 border border-cyan/50 text-cyan font-semibold rounded-full hover:bg-cyan/10 transition-all duration-300 backdrop-blur-sm cursor-pointer">
                    Establecer Contacto
                </a>
            </div>
        </div>

        <!-- Scroll indicador -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce z-20">
            <i class="fas fa-chevron-down text-cyan text-2xl"></i>
        </div>
        

    </section>

    <!-- Sobre mí -->
    <section id="sobre-mi" class="py-24 relative z-10">
        <div class="container mx-auto px-6">
            <!-- Decorative header -->
            <div class="flex items-center gap-4 mb-16 justify-center">
                <div class="h-px w-12 bg-gradient-to-r from-transparent to-cyan"></div>
                <h2 class="text-4xl font-bold font-sans text-transparent bg-clip-text bg-gradient-to-r from-cyan to-accent">Sobre mí</h2>
                <div class="h-px w-12 bg-gradient-to-l from-transparent to-accent"></div>
            </div>

            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Imagen -->
                <div class="lg:w-5/12 flex justify-center relative">
                    <!-- Glowing back plates -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-accent to-cyan rounded-2xl blur-2xl opacity-20 animate-pulse"></div>
                    <div class="relative glass-card p-2 rounded-2xl group cursor-pointer w-full max-w-sm">
                        <!-- Imagen container con overflow -->
                        <div class="overflow-hidden rounded-xl border border-white/10 relative">
                            <div class="absolute inset-0 bg-gradient-to-t from-space-900/90 to-transparent z-10 pointer-events-none"></div>
                            <img src="/images/Gemini_Generated_Image_de_JuanDiegoVega.png" alt="Juan Diego Vega" class="w-full h-auto aspect-square object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out relative z-0">
                            <!-- Floating badge overlay -->
                            <div class="absolute bottom-4 left-4 z-20 flex items-center gap-2 glass px-3 py-1.5 rounded-full border border-cyan/30 text-sm">
                                <span class="relative flex h-3 w-3">
                                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan opacity-75"></span>
                                  <span class="relative inline-flex rounded-full h-3 w-3 bg-cyan"></span>
                                </span>
                                <span class="text-white font-medium tracking-wide">Disponible</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contenido -->
                <div class="lg:w-7/12">
                    <h3 class="text-3xl font-bold mb-4 text-white font-sans">Hola, soy Juan Diego</h3>
                    <p class="text-cyan font-medium tracking-wide uppercase text-sm mb-6 flex items-center gap-2">
                        <i class="fas fa-satellite"></i> Ingeniero de Sistemas en Formación
                    </p>
                    
                    <div class="space-y-4 text-gray-300 font-light leading-relaxed mb-8">
                        <p>
                            Mi pasión radica en construir el futuro a través del código. Me desenvuelvo en la intersección entre el <strong class="text-white font-medium">desarrollo web moderno</strong>, la estructura sólida de <strong class="text-white font-medium">redes de computadoras</strong> y la innovación en <strong class="text-white font-medium">inteligencia artificial</strong>.
                        </p>
                        <p>
                            Más que escribir líneas de código, busco resolver problemas complejos y aportar valor, creando arquitecturas escalables y experiencias digitales que se sientan como de otro planeta.
                        </p>
                    </div>

                    <!-- Estadísticas en Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
                        <div class="glass-card p-4 text-center group cursor-pointer hover:bg-space-800/50">
                            <i class="fas fa-hourglass-half text-accent text-xl mb-2 group-hover:animate-spin"></i>
                            <p class="text-white font-bold text-lg">25</p>
                            <p class="text-gray-400 text-xs uppercase tracking-wider">Años</p>
                        </div>
                        <div class="glass-card p-4 text-center group cursor-pointer hover:bg-space-800/50">
                            <i class="fas fa-map-marker-alt text-cyan text-xl mb-2 group-hover:animate-bounce"></i>
                            <p class="text-white font-bold text-lg">El Alto</p>
                            <p class="text-gray-400 text-xs uppercase tracking-wider">Ubicación</p>
                        </div>
                        <div class="glass-card p-4 text-center group cursor-pointer hover:bg-space-800/50">
                            <i class="fas fa-language text-pink-500 text-xl mb-2 group-hover:scale-110 transition-transform"></i>
                            <p class="text-white font-bold text-lg">Español</p>
                            <p class="text-gray-400 text-xs uppercase tracking-wider">Nativo</p>
                        </div>
                        <div class="glass-card p-4 text-center group cursor-pointer hover:bg-space-800/50">
                            <i class="fas fa-globe text-blue-400 text-xl mb-2 group-hover:animate-pulse"></i>
                            <p class="text-white font-bold text-lg">30%</p>
                            <p class="text-gray-400 text-xs uppercase tracking-wider">Inglés</p>
                        </div>
                    </div>

                    <!-- Botones de Redes -->
                    <div class="flex flex-wrap items-center gap-4">
                        <span class="text-sm font-medium text-gray-400 mr-2 uppercase tracking-widest">Conectar:</span>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=escorpiotauro2015@gmail.com" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full glass border border-white/10 text-gray-300 hover:border-cyan hover:text-cyan hover:shadow-[0_0_15px_rgba(0,240,255,0.4)] transition-all duration-300 transform hover:-translate-y-1" title="Enviar correo">
                            <i class="fas fa-envelope text-lg"></i>
                        </a>
                        <a href="https://wa.me/59170145646" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full glass border border-white/10 text-gray-300 hover:border-green-400 hover:text-green-400 hover:shadow-[0_0_15px_rgba(74,222,128,0.4)] transition-all duration-300 transform hover:-translate-y-1" title="WhatsApp">
                            <i class="fab fa-whatsapp text-lg"></i>
                        </a>
                        <a href="https://github.com/DCodeVega" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full glass border border-white/10 text-gray-300 hover:border-purple-400 hover:text-purple-400 hover:shadow-[0_0_15px_rgba(192,132,252,0.4)] transition-all duration-300 transform hover:-translate-y-1" title="GitHub">
                            <i class="fab fa-github text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tecnologías y Herramientas -->
    <section id="habilidades" class="py-24 relative z-10 bg-space-800/40">
        <div class="container mx-auto px-6">
            <!-- Decorative header -->
            <div class="flex items-center gap-4 mb-16 justify-center">
                <div class="h-px w-12 bg-gradient-to-r from-transparent to-cyan"></div>
                <h2 class="text-4xl font-bold font-sans text-transparent bg-clip-text bg-gradient-to-r from-cyan to-accent text-center">Tecnologías y herramientas</h2>
                <div class="h-px w-12 bg-gradient-to-l from-transparent to-accent"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Backend -->
                <div class="glass-card p-8 group">
                    <div class="flex items-center gap-3 mb-8 border-b border-white/10 pb-4">
                        <i class="fas fa-server text-cyan text-2xl group-hover:animate-pulse"></i>
                        <h3 class="text-2xl font-semibold text-white font-sans">Backend</h3>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <!-- PHP -->
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-cyan/50 hover:bg-cyan/10 transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fab fa-php text-4xl text-[#777BB4] mb-3"></i>
                            <span class="text-gray-300 text-sm font-medium tracking-wide">PHP</span>
                        </div>
                        <!-- Python -->
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-cyan/50 hover:bg-cyan/10 transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fab fa-python text-4xl text-[#3776AB] mb-3"></i>
                            <span class="text-gray-300 text-sm font-medium tracking-wide">Python</span>
                        </div>
                        <!-- Java -->
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-cyan/50 hover:bg-cyan/10 transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fab fa-java text-4xl text-[#007396] mb-3"></i>
                            <span class="text-gray-300 text-sm font-medium tracking-wide">Java</span>
                        </div>
                    </div>
                </div>

                <!-- Frontend -->
                <div class="glass-card p-8 group">
                    <div class="flex items-center gap-3 mb-8 border-b border-white/10 pb-4">
                        <i class="fas fa-laptop-code text-pink-400 text-2xl group-hover:animate-pulse"></i>
                        <h3 class="text-2xl font-semibold text-white font-sans">Frontend</h3>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <!-- HTML5 -->
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-pink-500/50 hover:bg-pink-500/10 transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fab fa-html5 text-4xl text-[#E34F26] mb-3"></i>
                            <span class="text-gray-300 text-sm font-medium tracking-wide">HTML</span>
                        </div>
                        <!-- CSS3 -->
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-pink-500/50 hover:bg-pink-500/10 transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fab fa-css3-alt text-4xl text-[#1572B6] mb-3"></i>
                            <span class="text-gray-300 text-sm font-medium tracking-wide">CSS</span>
                        </div>
                        <!-- JavaScript -->
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-pink-500/50 hover:bg-pink-500/10 transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fab fa-js text-4xl text-[#F7DF1E] mb-3"></i>
                            <span class="text-gray-300 text-sm font-medium tracking-wide">JavaScript</span>
                        </div>
                    </div>
                </div>

                <!-- Frameworks -->
                <div class="glass-card p-8 group">
                    <div class="flex items-center gap-3 mb-8 border-b border-white/10 pb-4">
                        <i class="fas fa-cubes text-accent text-2xl group-hover:animate-pulse"></i>
                        <h3 class="text-2xl font-semibold text-white font-sans">Frameworks</h3>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-accent/50 hover:bg-accent/10 transition-all duration-300 transform hover:-translate-y-1 text-center">
                            <i class="fab fa-laravel text-4xl text-[#FF2D20] mb-3"></i>
                            <span class="text-gray-300 text-xs font-medium tracking-wide">Laravel 12</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-accent/50 hover:bg-accent/10 transition-all duration-300 transform hover:-translate-y-1 text-center">
                            <i class="fab fa-vuejs text-4xl text-[#4FC08D] mb-3"></i>
                            <span class="text-gray-300 text-xs font-medium tracking-wide">Vue.js</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-accent/50 hover:bg-accent/10 transition-all duration-300 transform hover:-translate-y-1 text-center">
                            <svg class="w-10 h-10 text-[#06B6D4] mb-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-8.4 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C7.937 13.382 6.576 12 3.601 12z"/></svg>
                            <span class="text-gray-300 text-xs font-medium tracking-wide">Tailwind CSS</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-accent/50 hover:bg-accent/10 transition-all duration-300 transform hover:-translate-y-1 text-center">
                            <i class="fab fa-bootstrap text-4xl text-[#7952B3] mb-3"></i>
                            <span class="text-gray-300 text-xs font-medium tracking-wide">Bootstrap</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-accent/50 hover:bg-accent/10 transition-all duration-300 transform hover:-translate-y-1 text-center">
                            <i class="fas fa-flask text-4xl text-gray-300 mb-3"></i>
                            <span class="text-gray-300 text-xs font-medium tracking-wide">Flask</span>
                        </div>
                    </div>
                </div>

                <!-- Herramientas -->
                <div class="glass-card p-8 group">
                    <div class="flex items-center gap-3 mb-8 border-b border-white/10 pb-4">
                        <i class="fas fa-toolbox text-green-400 text-2xl group-hover:animate-pulse"></i>
                        <h3 class="text-2xl font-semibold text-white font-sans">Herramientas</h3>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-green-400/50 hover:bg-green-400/10 transition-all duration-300 transform hover:-translate-y-1 text-center">
                            <i class="fab fa-git-alt text-4xl text-[#F05032] mb-3"></i>
                            <span class="text-gray-300 text-xs font-medium tracking-wide">Git</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-green-400/50 hover:bg-green-400/10 transition-all duration-300 transform hover:-translate-y-1 text-center">
                            <i class="fab fa-github text-4xl text-white mb-3"></i>
                            <span class="text-gray-300 text-xs font-medium tracking-wide">GitHub</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-green-400/50 hover:bg-green-400/10 transition-all duration-300 transform hover:-translate-y-1 text-center">
                            <i class="fas fa-network-wired text-4xl text-[#049FD9] mb-3"></i>
                            <span class="text-gray-300 text-xs font-medium tracking-wide">Cisco PT</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-green-400/50 hover:bg-green-400/10 transition-all duration-300 transform hover:-translate-y-1 text-center">
                            <i class="fas fa-map-marked-alt text-4xl text-[#589632] mb-3"></i>
                            <span class="text-gray-300 text-xs font-medium tracking-wide">QGIS</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-green-400/50 hover:bg-green-400/10 transition-all duration-300 transform hover:-translate-y-1 text-center">
                            <i class="fas fa-palette text-4xl text-[#31A8FF] mb-3"></i>
                            <span class="text-gray-300 text-xs font-medium tracking-wide">Photoshop</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 rounded-xl bg-space-900/50 border border-white/5 hover:border-green-400/50 hover:bg-green-400/10 transition-all duration-300 transform hover:-translate-y-1 text-center">
                            <i class="fas fa-pen-nib text-4xl text-[#FF9A00] mb-3"></i>
                            <span class="text-gray-300 text-xs font-medium tracking-wide">Illustrator</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Proyectos -->
    <section id="proyectos" class="py-24 relative z-10 bg-space-800/60 backdrop-blur-sm">
        <div class="container mx-auto px-6">
            <div class="flex items-center gap-4 mb-16 justify-center">
                <div class="h-px w-12 bg-gradient-to-r from-transparent to-cyan"></div>
                <h2 class="text-4xl font-bold font-sans text-transparent bg-clip-text bg-gradient-to-r from-cyan to-accent text-center">Proyectos Destacados</h2>
                <div class="h-px w-12 bg-gradient-to-l from-transparent to-accent"></div>
            </div>

            <!-- Proyectos Completados -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                <!-- Proyecto 1 -->
                <div class="glass-card overflow-hidden group flex flex-col h-full" onclick="openProjectModal('project1')">
                    <div class="h-56 bg-space-900 flex items-center justify-center overflow-hidden relative cursor-pointer">
                        <img src="/images/proyectos/proyecto1.jpg" onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop'" alt="Proyecto" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-t from-space-900 via-transparent to-transparent opacity-90"></div>
                        <!-- Overlay on hover -->
                        <div class="absolute inset-0 bg-cyan/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <span class="px-4 py-2 bg-space-900/80 rounded-full text-white font-medium border border-cyan/50 backdrop-blur-md transform translate-y-4 group-hover:translate-y-0 transition-all duration-300"><i class="fas fa-search-plus mr-2"></i>Ver Detalles</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-cyan transition-colors">Sistema de Gestión Empresarial</h3>
                        <p class="text-gray-400 text-sm mb-6 flex-grow">Plataforma integral para control de inventarios, ventas y analítica de datos en tiempo real.</p>
                        
                        <!-- Tecnologías (Iconos) -->
                        <div class="flex flex-wrap items-center gap-3 mb-6">
                            <i class="fab fa-laravel text-2xl text-[#FF2D20]" title="Laravel"></i>
                            <i class="fab fa-vuejs text-2xl text-[#4FC08D]" title="Vue/Livewire"></i>
                            <i class="fas fa-wind text-2xl text-[#06B6D4]" title="Tailwind CSS"></i>
                            <i class="fas fa-database text-2xl text-[#00758F]" title="MySQL"></i>
                        </div>
                        
                        <div class="flex gap-4 mt-auto pt-4 border-t border-white/10">
                            <a href="https://github.com/DCodeVega" target="_blank" onclick="event.stopPropagation()" class="text-gray-400 hover:text-white transition-colors" title="Código Fuente"><i class="fab fa-github text-xl"></i></a>
                            <button class="ml-auto text-cyan hover:text-cyan-400 text-sm font-medium flex items-center gap-1">Demo <i class="fas fa-arrow-right text-xs"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 2 -->
                <div class="glass-card overflow-hidden group flex flex-col h-full" onclick="openProjectModal('project2')">
                    <div class="h-56 bg-space-900 flex items-center justify-center overflow-hidden relative cursor-pointer">
                        <img src="/images/proyectos/proyecto2.jpg" onerror="this.src='https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=2070&auto=format&fit=crop'" alt="Proyecto IoT" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-t from-space-900 via-transparent to-transparent opacity-90"></div>
                        <div class="absolute inset-0 bg-cyan/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <span class="px-4 py-2 bg-space-900/80 rounded-full text-white font-medium border border-cyan/50 backdrop-blur-md transform translate-y-4 group-hover:translate-y-0 transition-all duration-300"><i class="fas fa-search-plus mr-2"></i>Ver Detalles</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-cyan transition-colors">Red de Sensores IoT</h3>
                        <p class="text-gray-400 text-sm mb-6 flex-grow">Sistema de monitoreo ambiental en tiempo real mediante dispositivos edge y protocolos ligeros.</p>
                        
                        <!-- Tecnologías (Iconos) -->
                        <div class="flex flex-wrap items-center gap-3 mb-6">
                            <i class="fab fa-python text-2xl text-[#3776AB]" title="Python"></i>
                            <i class="fab fa-docker text-2xl text-[#2496ED]" title="Docker"></i>
                            <i class="fas fa-network-wired text-2xl text-[#5A5A5A]" title="MQTT/Redes"></i>
                            <i class="fab fa-raspberry-pi text-2xl text-[#C51A4A]" title="Raspberry Pi"></i>
                        </div>
                        
                        <div class="flex gap-4 mt-auto pt-4 border-t border-white/10">
                            <a href="https://github.com/DCodeVega" target="_blank" onclick="event.stopPropagation()" class="text-gray-400 hover:text-white transition-colors" title="Código Fuente"><i class="fab fa-github text-xl"></i></a>
                            <button class="ml-auto text-cyan hover:text-cyan-400 text-sm font-medium flex items-center gap-1">Demo <i class="fas fa-arrow-right text-xs"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 3 -->
                <div class="glass-card overflow-hidden group flex flex-col h-full" onclick="openProjectModal('project3')">
                    <div class="h-56 bg-space-900 flex items-center justify-center overflow-hidden relative cursor-pointer">
                        <img src="/images/proyectos/proyecto3.jpg" onerror="this.src='https://images.unsplash.com/photo-1555949963-aa79dcee981c?q=80&w=2070&auto=format&fit=crop'" alt="Machine Learning" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-t from-space-900 via-transparent to-transparent opacity-90"></div>
                        <div class="absolute inset-0 bg-cyan/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <span class="px-4 py-2 bg-space-900/80 rounded-full text-white font-medium border border-cyan/50 backdrop-blur-md transform translate-y-4 group-hover:translate-y-0 transition-all duration-300"><i class="fas fa-search-plus mr-2"></i>Ver Detalles</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-cyan transition-colors">Modelo ML Predictivo</h3>
                        <p class="text-gray-400 text-sm mb-6 flex-grow">Algoritmo de machine learning para forecasting de ventas empleando redes neuronales recurrentes.</p>
                        
                        <div class="flex flex-wrap items-center gap-3 mb-6">
                            <i class="fab fa-python text-2xl text-[#3776AB]" title="Python"></i>
                            <i class="fas fa-brain text-2xl text-[#FF6F00]" title="TensorFlow/ML"></i>
                            <i class="fas fa-chart-line text-2xl text-[#150458]" title="Pandas"></i>
                        </div>
                        
                        <div class="flex gap-4 mt-auto pt-4 border-t border-white/10">
                            <a href="https://github.com/DCodeVega" target="_blank" onclick="event.stopPropagation()" class="text-gray-400 hover:text-white transition-colors" title="Código Fuente"><i class="fab fa-github text-xl"></i></a>
                            <button class="ml-auto text-cyan hover:text-cyan-400 text-sm font-medium flex items-center gap-1">Demo <i class="fas fa-arrow-right text-xs"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyectos en Desarrollo -->
            <div class="flex items-center gap-4 mb-12 justify-center mt-12">
                <div class="h-px w-8 bg-gradient-to-r from-transparent to-accent"></div>
                <h3 class="text-3xl font-bold font-sans text-white text-center">En Desarrollo <span class="text-accent">(Próximamente)</span></h3>
                <div class="h-px w-8 bg-gradient-to-l from-transparent to-accent"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Proyecto Dev 1 -->
                <div class="glass-card overflow-hidden group flex flex-col h-full border-accent/30" onclick="openProjectModal('project4')">
                    <div class="h-56 bg-space-900 flex items-center justify-center overflow-hidden relative cursor-pointer">
                        <div class="absolute inset-0 bg-space-900/60 z-10 flex flex-col items-center justify-center backdrop-blur-[2px] transition-all duration-300 group-hover:backdrop-blur-sm">
                            <i class="fas fa-tools text-4xl text-accent mb-2"></i>
                            <span class="text-white font-medium tracking-widest uppercase text-sm border border-accent/50 px-3 py-1 rounded-full bg-space-900/80 mt-2 transform group-hover:scale-105 transition-transform"><i class="fas fa-search-plus mr-2"></i>Ver Avance</span>
                        </div>
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=2070&auto=format&fit=crop" alt="En Desarrollo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out opacity-40">
                    </div>
                    <div class="p-6 flex flex-col flex-grow relative">
                        <div class="absolute -top-4 right-6 bg-accent text-white text-xs font-bold px-3 py-1 rounded-full shadow-[0_0_10px_rgba(139,92,246,0.6)]">WIP</div>
                        <h3 class="text-xl font-bold text-gray-200 mb-2 group-hover:text-accent transition-colors">App Móvil E-Commerce</h3>
                        <p class="text-gray-500 text-sm mb-6 flex-grow">Aplicación multiplataforma para la gestión de tiendas virtuales con integración de pasarelas de pago.</p>
                        
                        <div class="flex flex-wrap items-center gap-3 mb-6 opacity-60">
                            <i class="fab fa-react text-2xl text-[#61DAFB]" title="React Native"></i>
                            <i class="fab fa-node-js text-2xl text-[#339933]" title="Node.js"></i>
                            <i class="fas fa-database text-2xl text-[#47A248]" title="MongoDB"></i>
                        </div>
                        
                        <div class="flex gap-4 mt-auto pt-4 border-t border-white/5 justify-between">
                            <button class="w-full text-accent/80 hover:text-accent text-sm font-medium flex items-center justify-center gap-2" disabled>
                                <i class="fas fa-hard-hat"></i> En Desarrollo
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Habilidades Profesionales -->
    <section id="habilidades-profesionales" class="py-24 relative z-10 bg-space-800/40 backdrop-blur-sm">
        <div class="container mx-auto px-6">
            <div class="flex items-center gap-4 mb-16 justify-center">
                <div class="h-px w-12 bg-gradient-to-r from-transparent to-cyan"></div>
                <h2 class="text-4xl font-bold font-sans text-transparent bg-clip-text bg-gradient-to-r from-cyan to-accent text-center">Habilidades Profesionales</h2>
                <div class="h-px w-12 bg-gradient-to-l from-transparent to-accent"></div>
            </div>
            
            <p class="text-center text-gray-400 max-w-2xl mx-auto mb-16 text-lg">Competencias técnicas y transversales adquiridas como Ingeniero de Sistemas, orientadas a la resolución integral de problemas y la innovación tecnológica.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                <!-- 1. Redes -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-cyan/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-cyan/50 group-hover:shadow-[0_0_15px_rgba(0,240,255,0.4)] transition-all">
                            <i class="fas fa-network-wired text-cyan text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-cyan transition-colors">Redes</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow">
                        <li class="flex items-start"><i class="fas fa-check-circle text-cyan/70 mt-1 mr-3 text-xs"></i><span>Configuración de routers (Cisco, TP-Link)</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-cyan/70 mt-1 mr-3 text-xs"></i><span>Diseño de cableado estructurado</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-cyan/70 mt-1 mr-3 text-xs"></i><span>Protocolos de enrutamiento y redes LAN/WAN</span></li>
                    </ul>
                </div>

                <!-- 2. Ciberseguridad -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-red-500/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-red-500/50 group-hover:shadow-[0_0_15px_rgba(239,68,68,0.4)] transition-all">
                            <i class="fas fa-shield-alt text-red-400 text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-red-400 transition-colors">Ciberseguridad y Auditoría</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow">
                        <li class="flex items-start"><i class="fas fa-check-circle text-red-400/70 mt-1 mr-3 text-xs"></i><span>Extracción de datos y análisis forense</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-red-400/70 mt-1 mr-3 text-xs"></i><span>Uso avanzado de Kali Linux</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-red-400/70 mt-1 mr-3 text-xs"></i><span>Auditoría de vulnerabilidades en sistemas web</span></li>
                    </ul>
                </div>

                <!-- 3. Metodologías e informes -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-blue-400/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-blue-400/50 group-hover:shadow-[0_0_15px_rgba(96,165,250,0.4)] transition-all">
                            <i class="fas fa-file-signature text-blue-400 text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-blue-400 transition-colors leading-tight">Metodologías e Informes</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow">
                        <li class="flex items-start"><i class="fas fa-check-circle text-blue-400/70 mt-1 mr-3 text-xs"></i><span>Dominio de Word, Excel y PowerPoint</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-blue-400/70 mt-1 mr-3 text-xs"></i><span>Planificación de proyectos informáticos</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-blue-400/70 mt-1 mr-3 text-xs"></i><span>Redacción de informes técnicos de ingeniería</span></li>
                    </ul>
                </div>

                <!-- 4. Diseño gráfico -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-pink-400/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-pink-400/50 group-hover:shadow-[0_0_15px_rgba(244,114,182,0.4)] transition-all">
                            <i class="fas fa-palette text-pink-400 text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-pink-400 transition-colors leading-tight">Diseño Gráfico y Multimedia</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow">
                        <li class="flex items-start"><i class="fas fa-check-circle text-pink-400/70 mt-1 mr-3 text-xs"></i><span>Adobe Photoshop & Illustrator</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-pink-400/70 mt-1 mr-3 text-xs"></i><span>Edición de video profesional</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-pink-400/70 mt-1 mr-3 text-xs"></i><span>Creación de infografías e interfaces visuales</span></li>
                    </ul>
                </div>

                <!-- 5. Vibecoding / IA -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-accent/30 relative overflow-hidden">
                    <div class="absolute -right-4 -top-4 w-20 h-20 bg-accent/10 rounded-full blur-2xl group-hover:bg-accent/30 transition-colors"></div>
                    <div class="flex items-center mb-6 relative z-10">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-accent/50 group-hover:shadow-[0_0_15px_rgba(139,92,246,0.4)] transition-all">
                            <i class="fas fa-robot text-accent text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-accent transition-colors leading-tight">Desarrollo por IA (Vibecoding)</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow relative z-10">
                        <li class="flex items-start"><i class="fas fa-check-circle text-accent/70 mt-1 mr-3 text-xs"></i><span>Antigravity & Open Code</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-accent/70 mt-1 mr-3 text-xs"></i><span>GitHub Copilot y automatización</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-accent/70 mt-1 mr-3 text-xs"></i><span>Creación de Agentes y Skills inteligentes</span></li>
                    </ul>
                </div>

                <!-- 6. Habilidades blandas -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-orange-400/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-orange-400/50 group-hover:shadow-[0_0_15px_rgba(251,146,60,0.4)] transition-all">
                            <i class="fas fa-users text-orange-400 text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-orange-400 transition-colors">Habilidades Blandas</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow">
                        <li class="flex items-start"><i class="fas fa-check-circle text-orange-400/70 mt-1 mr-3 text-xs"></i><span>Trabajo en equipo multidisciplinario</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-orange-400/70 mt-1 mr-3 text-xs"></i><span>Comunicación efectiva con personas no técnicas</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-orange-400/70 mt-1 mr-3 text-xs"></i><span>Alta adaptabilidad al cambio tecnológico</span></li>
                    </ul>
                </div>

                <!-- 7. Estadística -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-yellow-400/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-yellow-400/50 group-hover:shadow-[0_0_15px_rgba(250,204,21,0.4)] transition-all">
                            <i class="fas fa-chart-pie text-yellow-400 text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-yellow-400 transition-colors leading-tight">Estadística y Probabilidades</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow">
                        <li class="flex items-start"><i class="fas fa-check-circle text-yellow-400/70 mt-1 mr-3 text-xs"></i><span>Estadística descriptiva e inferencial</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-yellow-400/70 mt-1 mr-3 text-xs"></i><span>Análisis de correlación simple</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-yellow-400/70 mt-1 mr-3 text-xs"></i><span>Lógica avanzada en resolución de problemas</span></li>
                    </ul>
                </div>

                <!-- 8. Financiero -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-green-400/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-green-400/50 group-hover:shadow-[0_0_15px_rgba(74,222,128,0.4)] transition-all">
                            <i class="fas fa-coins text-green-400 text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-green-400 transition-colors leading-tight">Conocimiento Financiero</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow">
                        <li class="flex items-start"><i class="fas fa-check-circle text-green-400/70 mt-1 mr-3 text-xs"></i><span>Análisis costo-beneficio de TI</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-green-400/70 mt-1 mr-3 text-xs"></i><span>Elaboración de propuestas simples</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-green-400/70 mt-1 mr-3 text-xs"></i><span>Lectura de estados intermedios y evaluación de proyectos</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

        <!-- Contacto -->
    <section id="contacto" class="py-24 relative z-10 bg-space-900/80 backdrop-blur-md border-t border-white/5">
        <div class="container mx-auto px-6">
            <div class="flex items-center gap-4 mb-16 justify-center">
                <div class="h-px w-12 bg-gradient-to-r from-transparent to-cyan"></div>
                <h2 class="text-4xl font-bold font-sans text-transparent bg-clip-text bg-gradient-to-r from-cyan to-accent text-center">Transmisión de Contacto</h2>
                <div class="h-px w-12 bg-gradient-to-l from-transparent to-accent"></div>
            </div>

            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-12">
                
                <!-- Columna Izquierda: Información -->
                <div class="md:col-span-5 flex flex-col justify-center space-y-8">
                    <div class="glass-card p-8 border border-cyan/20 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-cyan/10 rounded-full blur-3xl group-hover:bg-cyan/20 transition-all duration-500"></div>
                        <h3 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                            <i class="fas fa-satellite-dish text-cyan"></i> 
                            Establecer Conexión
                        </h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-8">
                            ¿Tienes un proyecto en mente o necesitas auditoría técnica? Abre un canal de comunicación seguro y responderé a la brevedad posible.
                        </p>

                        <div class="space-y-6">
                            <!-- Email -->
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=escorpiotauro2015@gmail.com" target="_blank" class="flex items-center gap-4 p-4 rounded-xl bg-space-800/50 border border-white/5 hover:border-cyan/50 hover:bg-cyan/10 transition-all group/item">
                                <div class="w-12 h-12 rounded-full bg-space-900 flex items-center justify-center text-gray-400 group-hover/item:text-cyan group-hover/item:shadow-[0_0_15px_rgba(0,240,255,0.3)] transition-all">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Correo Seguro</p>
                                    <p class="text-sm text-gray-300">escorpiotauro2015@gmail.com</p>
                                </div>
                            </a>

                            <!-- WhatsApp -->
                            <a href="https://wa.me/59170145646" target="_blank" class="flex items-center gap-4 p-4 rounded-xl bg-space-800/50 border border-white/5 hover:border-green-400/50 hover:bg-green-400/10 transition-all group/item">
                                <div class="w-12 h-12 rounded-full bg-space-900 flex items-center justify-center text-gray-400 group-hover/item:text-green-400 group-hover/item:shadow-[0_0_15px_rgba(74,222,128,0.3)] transition-all">
                                    <i class="fab fa-whatsapp text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 font-semibold uppercase tracking-wider">WhatsApp</p>
                                    <p class="text-sm text-gray-300">+591 70145646</p>
                                </div>
                            </a>

                            <!-- Ubicacion -->
                            <div class="flex items-center gap-4 p-4 rounded-xl bg-space-800/50 border border-white/5">
                                <div class="w-12 h-12 rounded-full bg-space-900 flex items-center justify-center text-accent">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Coordenadas Base</p>
                                    <p class="text-sm text-gray-300">El Alto, La Paz, Bolivia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha: Formulario -->
                <div class="md:col-span-7">
                    <div class="glass-card p-8 border-t border-accent/30 h-full relative">
                        <h3 class="text-xl font-bold text-gray-200 mb-6 flex items-center gap-2">
                            <i class="fas fa-terminal text-accent text-sm"></i> Terminal de Mensajería
                        </h3>
                        
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="nombre" class="text-xs font-semibold text-cyan uppercase tracking-widest pl-1">Identidad (Nombre)</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <i class="fas fa-user text-gray-500"></i>
                                        </div>
                                        <input type="text" id="nombre" class="w-full pl-11 pr-4 py-3 bg-space-900/80 border border-gray-700 rounded-lg focus:border-cyan focus:ring-1 focus:ring-cyan text-gray-100 placeholder-gray-600 transition-all outline-none" placeholder="Tu nombre...">
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <label for="email" class="text-xs font-semibold text-cyan uppercase tracking-widest pl-1">Frecuencia (Email)</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <i class="fas fa-at text-gray-500"></i>
                                        </div>
                                        <input type="email" id="email" class="w-full pl-11 pr-4 py-3 bg-space-900/80 border border-gray-700 rounded-lg focus:border-cyan focus:ring-1 focus:ring-cyan text-gray-100 placeholder-gray-600 transition-all outline-none" placeholder="correo@dominio.com">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="space-y-2">
                                <label for="asunto" class="text-xs font-semibold text-cyan uppercase tracking-widest pl-1">Vector de Ataque (Asunto)</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-heading text-gray-500"></i>
                                    </div>
                                    <input type="text" id="asunto" class="w-full pl-11 pr-4 py-3 bg-space-900/80 border border-gray-700 rounded-lg focus:border-cyan focus:ring-1 focus:ring-cyan text-gray-100 placeholder-gray-600 transition-all outline-none" placeholder="Motivo de la transmisión">
                                </div>
                            </div>
                            
                            <div class="space-y-2">
                                <label for="mensaje" class="text-xs font-semibold text-cyan uppercase tracking-widest pl-1">Carga Útil (Mensaje)</label>
                                <textarea id="mensaje" rows="5" class="w-full px-4 py-3 bg-space-900/80 border border-gray-700 rounded-lg focus:border-cyan focus:ring-1 focus:ring-cyan text-gray-100 placeholder-gray-600 transition-all outline-none resize-none" placeholder="Escribe tu mensaje aquí..."></textarea>
                            </div>
                            
                            <button type="submit" class="w-full py-4 bg-gradient-to-r from-cyan to-blue-600 text-white font-bold rounded-lg hover:shadow-[0_0_20px_rgba(0,240,255,0.4)] hover:scale-[1.02] transition-all flex items-center justify-center gap-3 group">
                                <span>Emitir Transmisión</span>
                                <i class="fas fa-paper-plane group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-10 bg-[#070b19] text-center border-t border-white/5 relative z-10 overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-1/2 h-px bg-gradient-to-r from-transparent via-cyan to-transparent opacity-50"></div>
        <div class="container mx-auto px-6 relative">
            <h4 class="text-2xl font-bold text-white mb-6 font-sans">Juan Diego Vega Martinez</h4>
            <div class="flex justify-center gap-6 mb-8">
                <a href="https://github.com/DCodeVega" target="_blank" class="w-10 h-10 rounded-full glass border border-white/10 flex items-center justify-center text-gray-400 hover:text-cyan hover:border-cyan transition-all transform hover:-translate-y-1">
                    <i class="fab fa-github text-lg"></i>
                </a>
                <a href="https://wa.me/59170145646" target="_blank" class="w-10 h-10 rounded-full glass border border-white/10 flex items-center justify-center text-gray-400 hover:text-green-400 hover:border-green-400 transition-all transform hover:-translate-y-1">
                    <i class="fab fa-whatsapp text-lg"></i>
                </a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=escorpiotauro2015@gmail.com" target="_blank" class="w-10 h-10 rounded-full glass border border-white/10 flex items-center justify-center text-gray-400 hover:text-cyan hover:border-cyan transition-all transform hover:-translate-y-1">
                    <i class="fas fa-envelope text-lg"></i>
                </a>
            </div>
            <p class="text-gray-500 text-sm tracking-widest uppercase">
                &copy; 2026 INGENIERÍA DE SISTEMAS. Todos los derechos reservados.
            </p>
        </div>
    </footer>

    <!-- Project Modal Overlay -->
    <div id="projectModal" class="fixed inset-0 z-[100] flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-space-900/90 backdrop-blur-md" onclick="closeProjectModal()"></div>
        
        <!-- Modal Content -->
        <div class="relative w-11/12 max-w-6xl h-[85vh] md:h-[75vh] glass-card border border-cyan/30 flex flex-col md:flex-row overflow-hidden transform scale-95 transition-transform duration-300" id="modalContainer">
            <!-- Close button -->
            <button onclick="closeProjectModal()" class="absolute top-4 right-4 z-50 w-10 h-10 flex items-center justify-center rounded-full bg-space-900/80 text-white hover:text-cyan hover:bg-space-700 transition-colors border border-white/10 shadow-lg">
                <i class="fas fa-times text-xl"></i>
            </button>

            <!-- Left: Carousel (75%) -->
            <div class="w-full md:w-3/4 h-1/2 md:h-full relative bg-black flex items-center justify-center group overflow-hidden">
                <img id="modalImage" src="" alt="Vista del Proyecto" class="w-full h-full object-cover opacity-100 transition-opacity duration-500">
                
                <!-- Overlay gradient for bottom -->
                <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-space-900 to-transparent pointer-events-none"></div>

                <!-- Controls -->
                <button onclick="prevModalImage()" class="absolute left-4 w-12 h-12 flex items-center justify-center rounded-full bg-space-900/70 text-white hover:bg-cyan/80 hover:text-space-900 transition-all opacity-0 md:group-hover:opacity-100 backdrop-blur-sm border border-white/10 focus:opacity-100">
                    <i class="fas fa-chevron-left text-xl"></i>
                </button>
                <button onclick="nextModalImage()" class="absolute right-4 w-12 h-12 flex items-center justify-center rounded-full bg-space-900/70 text-white hover:bg-cyan/80 hover:text-space-900 transition-all opacity-0 md:group-hover:opacity-100 backdrop-blur-sm border border-white/10 focus:opacity-100">
                    <i class="fas fa-chevron-right text-xl"></i>
                </button>
                
                <!-- Dots -->
                <div class="absolute bottom-6 flex gap-2 z-20" id="modalDots">
                    <!-- Dots injected by JS -->
                </div>
            </div>

            <!-- Right: Details (25%) -->
            <div class="w-full md:w-1/4 h-1/2 md:h-full bg-space-800/95 p-6 flex flex-col border-t md:border-t-0 md:border-l border-white/10 overflow-y-auto">
                <h3 id="modalTitle" class="text-xl md:text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan to-accent mb-4 font-sans leading-tight"></h3>
                
                <div class="mb-6 flex flex-wrap gap-2" id="modalTechs">
                    <!-- Tech badges injected by JS -->
                </div>

                <div class="flex-grow">
                    <h4 class="text-white font-semibold mb-3 flex items-center gap-2 text-sm uppercase tracking-wider"><i class="fas fa-image text-cyan"></i> Detalles de la vista:</h4>
                    <p id="modalDescription" class="text-gray-300 text-sm leading-relaxed mb-6 p-4 rounded-lg bg-space-900/50 border border-white/5"></p>
                    
                    <h4 class="text-white font-semibold mb-2 flex items-center gap-2 text-sm uppercase tracking-wider"><i class="fas fa-satellite-dish text-accent"></i> Estado actual:</h4>
                    <p id="modalStatus" class="text-gray-400 text-sm italic bg-space-900/30 px-3 py-2 rounded-lg"></p>
                </div>

                <div class="mt-6 pt-6 border-t border-white/10 flex gap-3" id="modalActions">
                    <!-- Actions injected by JS -->
                </div>
            </div>
        </div>
    </div>

    <!-- Project Data & JS -->
    <script>
        const projectData = {
            'project1': {
                title: 'Sistema de Gestión Empresarial',
                techs: ['Laravel 10', 'Vue.js', 'Tailwind', 'MySQL'],
                status: 'Completado - En Producción',
                linkCode: 'https://github.com/DCodeVega',
                linkDemo: '#',
                images: [
                    { src: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070', desc: 'Panel de Control Principal (Dashboard) con gráficos en tiempo real analizando el volumen de ventas y el estado del inventario global.' },
                    { src: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015', desc: 'Vista detallada del módulo de Análisis Financiero. Permite exportar reportes dinámicos usando integraciones de bibliotecas gráficas.' },
                    { src: 'https://images.unsplash.com/photo-1555099962-4199c345e5dd?q=80&w=2070', desc: 'Sistema de código backend desarrollado en Laravel. Implementa autenticación robusta y una API RESTful para conectar con la app móvil.' }
                ]
            },
            'project2': {
                title: 'Red de Sensores IoT',
                techs: ['Python', 'Docker', 'MQTT', 'Raspberry Pi'],
                status: 'Completado - Operativo',
                linkCode: 'https://github.com/DCodeVega',
                linkDemo: '#',
                images: [
                    { src: 'https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=2070', desc: 'Placa madre del controlador central Raspberry Pi manejando múltiples nodos de sensores de humedad y temperatura.' },
                    { src: 'https://images.unsplash.com/photo-1558346490-a72e53ae2d4f?q=80&w=2070', desc: 'Interfaz del bróker MQTT monitorizando el flujo continuo de paquetes de datos a través de la red local.' },
                    { src: 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070', desc: 'Terminal de ciberseguridad configurada para encriptar todos los datos transferidos hacia el clúster de base de datos.' }
                ]
            },
            'project3': {
                title: 'Modelo ML Predictivo',
                techs: ['Python', 'TensorFlow', 'Pandas'],
                status: 'Finalizado (Versión 1.2)',
                linkCode: 'https://github.com/DCodeVega',
                linkDemo: '#',
                images: [
                    { src: 'https://images.unsplash.com/photo-1555949963-aa79dcee981c?q=80&w=2070', desc: 'Líneas de código del entrenamiento de la red neuronal empleando TensorFlow sobre un dataset procesado de 50GB.' },
                    { src: 'https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?q=80&w=2076', desc: 'Visualización de datos resultante: curvas de predicción cruzadas con los datos históricos de ventas.' },
                    { src: 'https://images.unsplash.com/photo-1518186285589-2f7649de83e0?q=80&w=2074', desc: 'Servidor local donde el modelo emite predicciones a través de un endpoint API expuesto para consumidores externos.' }
                ]
            },
            'project4': {
                title: 'App Móvil E-Commerce (WIP)',
                techs: ['React Native', 'Node.js', 'MongoDB'],
                status: 'En Desarrollo (Fase Beta)',
                linkCode: '#',
                linkDemo: '#',
                images: [
                    { src: 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=2070', desc: 'Estructura inicial del frontend responsivo de la aplicación. Interfaces y flujos de usuario (wireframes) en programación.' },
                    { src: 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=2070', desc: 'Testing en dispositivos físicos y emuladores para asegurar el rendimiento fluido en componentes nativos.' },
                    { src: 'https://images.unsplash.com/photo-1607082349566-187342175e2f?q=80&w=2070', desc: 'Integración en progreso de las pasarelas de pago utilizando APIs bancarias encriptadas.' }
                ]
            }
        };

        let currentProject = null;
        let currentImageIndex = 0;

        function openProjectModal(projectId) {
            currentProject = projectData[projectId];
            currentImageIndex = 0;
            
            if (!currentProject) return;

            // Populate static texts
            document.getElementById('modalTitle').innerText = currentProject.title;
            document.getElementById('modalStatus').innerText = currentProject.status;
            
            // Populate techs
            const techsContainer = document.getElementById('modalTechs');
            techsContainer.innerHTML = '';
            currentProject.techs.forEach(tech => {
                techsContainer.innerHTML += `<span class="px-2 py-1 bg-space-600/80 rounded border border-cyan/30 text-xs text-cyan tracking-wide">${tech}</span>`;
            });

            // Populate actions based on project status
            const actionsContainer = document.getElementById('modalActions');
            if (projectId === 'project4') {
                actionsContainer.innerHTML = `
                    <button class="w-full px-4 py-2 bg-space-600 text-gray-400 font-semibold rounded cursor-not-allowed flex items-center justify-center gap-2">
                        <i class="fas fa-hard-hat"></i> En Desarrollo
                    </button>
                `;
            } else {
                actionsContainer.innerHTML = `
                    <a href="${currentProject.linkCode}" target="_blank" class="flex-1 px-4 py-2 border border-cyan/50 text-cyan text-center font-semibold rounded hover:bg-cyan/10 transition-colors flex items-center justify-center gap-2">
                        <i class="fab fa-github"></i> Código
                    </a>
                    <a href="${currentProject.linkDemo}" target="_blank" class="flex-1 px-4 py-2 bg-gradient-to-r from-accent to-accent-purple text-white text-center font-semibold rounded hover:shadow-[0_0_15px_rgba(139,92,246,0.5)] transition-all flex items-center justify-center gap-2">
                        Demo <i class="fas fa-external-link-alt text-xs"></i>
                    </a>
                `;
            }

            // Update image and description
            updateModalImage();

            // Show modal with animation
            const modal = document.getElementById('projectModal');
            const container = document.getElementById('modalContainer');
            modal.classList.remove('hidden');
            // Small delay to allow display:block to apply before animating opacity
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                container.classList.remove('scale-95');
            }, 10);
            
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        function closeProjectModal() {
            const modal = document.getElementById('projectModal');
            const container = document.getElementById('modalContainer');
            
            modal.classList.add('opacity-0');
            container.classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto'; // Restore scrolling
            }, 300);
        }

        function updateModalImage() {
            const imgEl = document.getElementById('modalImage');
            const descEl = document.getElementById('modalDescription');
            const dotsContainer = document.getElementById('modalDots');
            
            // Fade out
            imgEl.style.opacity = '0.3';
            
            setTimeout(() => {
                const imgData = currentProject.images[currentImageIndex];
                imgEl.src = imgData.src;
                descEl.innerText = imgData.desc;
                
                // Update dots
                dotsContainer.innerHTML = '';
                currentProject.images.forEach((_, idx) => {
                    const activeClass = idx === currentImageIndex ? 'bg-cyan w-6' : 'bg-white/40 w-2 hover:bg-white/80';
                    dotsContainer.innerHTML += `<div class="h-2 rounded-full cursor-pointer transition-all duration-300 ${activeClass}" onclick="goToModalImage(${idx})"></div>`;
                });
                
                // Fade in
                imgEl.style.opacity = '1';
            }, 200);
        }

        function nextModalImage() {
            currentImageIndex = (currentImageIndex + 1) % currentProject.images.length;
            updateModalImage();
        }

        function prevModalImage() {
            currentImageIndex = (currentImageIndex - 1 + currentProject.images.length) % currentProject.images.length;
            updateModalImage();
        }

        function goToModalImage(idx) {
            currentImageIndex = idx;
            updateModalImage();
        }
    </script>

</body>
</html>