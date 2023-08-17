<footer>
    <style>
        .footer{
            display: flex;
            justify-content: space-between;
            margin: 100px 5% 20px 5%;
        }
        .footer__appname{
            color: #FDB100;
            font-weight: 700;
            font-size: 24px;
            line-height: 30px;
        }
    </style>
    <div class='footer'>
        <div class='footer__appname'>
            <p>
                {{ config('app.name') }}
            </p>
        </div>
        <div>
            <p>
                © {{ config('app.name') }} {{ date('Y') }}
            </p>
        </div>
    </div>
</footer>