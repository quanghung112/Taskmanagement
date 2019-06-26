<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
    <style>
        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        div {
            border: black;
            width: 500px;
            height: 300px;
        }

        h2 {
            text-align: center;
        }

        div {
            width: 600px;
            height: 400px;
            border: 3px solid black;
            position: absolute;
            left: 30%;
        }

        input {
            width: 300px;
            height: 30px;
            border-radius: 3px;
            margin-top: 10px;
        }

        button {
            width: 200px;
            height: 30px;
            font-size: 18px;
            border-radius: 3px;
            margin-top: 50px;
            font-family: "Abyssinica SIL";
            margin-left: 30%;
        }

        span {
            width: 100px;
            display: inline-block;
            margin-left: 15%;
        }

    </style>
</head>
<body>
<form action="{{route('customer.index')}}" method="post">
    @csrf
    <div>
        <h1>Add new Customer</h1>
        <span>Name: </span>
        <input type="text" name="name" placeholder="Nhap ten ">
        <br>
        <span>Phone:</span>
        <input type="text" name="phone" placeholder="Nhap so dien thoai">
        <span>Email</span>
        <input type="email" name="email" placeholder="xxx@xxxx.xxx">
        <br>
        <button type="submit">ADD_PRODUCT</button>
    </div>
</form>
</body>
