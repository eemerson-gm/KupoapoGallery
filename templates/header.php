<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        html, body
        {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .nopadding
        {
            padding: 0 !important;
            margin: 0 !important;
        }
        .background
        {
            display: fixed;
            width: 100%;
            height: 100%;
            background: url("/images/background.png") repeat;
            animation: slide 60s linear infinite;
        }
        div.main
        {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @keyframes slide 
        {
            0% 
            {
                background-position: 0px 0px;
            }
            100% 
            {
                background-position: 1024px 1024px;
            }
        }
    </style>
</head>