<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css"
        integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #999;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    maxWidth: {
                        'container': '1170px'
                    },
                    boxShadow: {
                        'subNav': '0 1px 2px 2px rgba(0,0,0,0.2)',
                        'productShadow': '0px 12px 16px rgba(0,0,0,0.12)'
                    },
                    textColor: {
                        'baseColor': '#91ad41',
                        'grayColor': '#707070'
                    },
                    backgroundImage: {
                        'bgStriped': "linear-gradient(35deg, #91ad41 0%, #ff8a6c 100%)",
                    },
                    gridTemplateColumns: {
                        '4fr_8fr': '4fr 8fr'
                    },
                    backgroundColor: {
                        'baseColor': '#91ad41',
                        'grayColor': '#707070'
                    },
                    borderColor: {
                        'baseColor': '#91ad41',
                        'grayColor': '#707070'
                    }
                }
            }
        }
    </script>
</head>

<body>
    <x-header />
    <div>
        {{ $slot }}
    </div>
    <x-footer />
    <x-flash />
</body>

</html>
