<?php

return [
    'alipay' => [
        'app_id'         => '2021000116661869',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAq0ZMuftN+uEYtIlQuRqnP30EADb5sWHo7Lb8GpbkDIN95+g6clY07NHflxVAHb5QuWbaSp8hQTHnNPC0zKAmf+UiWu5PEOOp2corcGyENtVin6LyETlc8i8GqE0huRVNltZi1crB4vAHKBgFgNQObVU8yWtWYeMS0IzWACpkbEVTjMx13kB2RsJEHYj3HjxE1vqVBIxPYdFHoXhGWUmqi/WPt0LW2EcQMH/B7VnO6I013pPWdxFOGkA5CKOcDp0BLpAzYYnE+JTcLaEAtJbeHvHfiBHpaWtGgPhtcrj+gl6FX9RJfNd5HNvih2weFET30xU3v8H3oorM+4GU63OLcwIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAlK5QnGdihU0eqvRGOsNoTXHNApdElVkTF1ZoKIC+wZa3UI2713qrr5xY6VcPG+WIm7iIwgQ3cr0ZsDara03SSifGWmwvJIHSSW4QdUy/SXfBxM06eFX0WEL/XImfvbGKZ3+J8RkBQjTmo+K6Lfb3kc9g0ni0HhwkMqNcARWbw6DZDDSWn4gw5+DRD1/TY6eiXoOvYftaKRliro6ja8RfFiWnKxIDDF5fyND56znx02yV3ej5Y2g+JjZSU5Ezxph+h3UKM1GmF9MimqLElmc8adUi9D+Hl0DkWyejb9QRNrMrLbAs0oW4HanSaaYLjLH9TLCgTNR2YhA62YwYb8GYrQIDAQABAoIBABc160GvZhL3Sh1YCwqrbMICTQXlhYBnKnLPO21vQ9hG5hE+Px/Rd7Hvj3XF8IbjW2Mr+LWJIPrZiIQY1MPonzaSZQXCs81YMvLhqtIVDBu1BVvqygD1MjMBKopQtc5QRBIKOAeaZrbmOUdGYthAIL/zhuL0kvHMZN4+4GMO84Ujfr22/cj30HLyCH2XHh2V9H0H52CoV41mWsDZSbrrR5YopgjR6DdkFeZJVxb+HMtfMB9TJ+WiORYOV4MDjITDue4ZGNuFYKxPTKXnXQTjtY10jfnYt0GwsfCDU4GigftdpU9jlFQBkAoZ1n6a6581L9swAkNYC8HU40lW7bgDsIUCgYEA3L9tMPTqaMPHCSsfh8wJc7Cbg7Aeo6uJYvCM0Ad3HAjzGuO8FXBMYiGssXJ8rzgaMtCc7upS3+cJseWXIHNfMGlGxyt0+UEdOIV1ceNqLFTnnqdzwZ1OKrkODRoiiwiryRxFSPe1taZhQAclLwS/UKRMKc6sgorcwa4G5H8BcuMCgYEArGyp4joaOxKyx4aUIFYvAf2Kx0R5GFU6uF/ZLPC5mDC/cSShsZ/dtm5V96RsMbrTMBG+df9sbTpcAQ49vyStQ8NgDoTkGhFJq5kEg5xgHSOc72i6bjbNhtVWnYrDxlbfwaBLvqhLvgOiiTc0drA2jrjcO1tkjaD8v00LXo3nSy8CgYBpwtEmvoC8Vug6TU3a+vegVQH9MtlLIzk8jPF6DcmURflrbabEQrxl26pojeiM7n0m0WoO0XeJTKEJeW1Rn9UAVcASVpDBht/gH5joSsOon7kk+ydroNk9gNHplxbrs+jR/th3IC8P67n2OjYnc8fRdBYFhb6DANLJfH5S5UKlbwKBgECLiOjD4U/dxwkD6u1T9dLj65B+pGokdY/RaYX2MzOyg+fB07mfY6rIEOxcI5hWHHpxGgAn9pnI7+oBP8IO48FrIMkunAjaEd7nsBXoct5Vl4jThn59i2B++iaNbI4RtT9RVylu7LObvrto6/3GJxY0Q1UA+FpAOn0ORURHEJ9HAoGAUxgHe2uQf7xtWsYaybprafqHcCADkRiXWkgTrNfcbFc9yBBRR2kuXBFrBIvOt92upl3De2PaXo2z+7OG64j1tF4BeYWyCyumiZK2Su88ei5QJqZeZD5Ot84T1/jP3LsiBMe1zRi9hAVfQIsHpaQCibSvBr1ZYISvlQzAgRzDjeg=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];