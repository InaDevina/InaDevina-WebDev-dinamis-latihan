<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Laptop</title>

    <style>
        form {
            background-color: #FFFFFF;
            padding: 35px 30px;
            border-radius: 16px;
            width: 340px;
            margin: 30px auto;
            border-top: 6px solid #F4A7BB;
            box-shadow: 0 8px 24px rgba(139, 58, 85, 0.15);
        }
        .form-title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #C94F7C;
            margin-bottom: 5px;
        }
        .form-subtitle {
            text-align: center;
            font-size: 14px;
            color: #999;
            margin-bottom: 25px;
        }
        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            color: #8B3A55;
        }
        .old-data {
            font-size: 12px;
            color: #999;
            margin-top: 4px;
        }
        .old-data span {
            color: #C94F7C;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px 12px;
            margin: 6px 0 16px;
            box-sizing: border-box;
            border: 1px solid #F4A7BB;
            border-radius: 8px;
            background-color: #FFF0F4;
            font-size: 14px;
            transition: all 0.2s;
        }
        input:focus {
            outline: none;
            border-color: #C94F7C;
            background-color: #FFFFFF;
            box-shadow: 0 0 0 3px rgba(201, 79, 124, 0.2);
        }
        input[type="submit"] {
            background-color: #C94F7C;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            font-size: 15px;
            padding: 12px;
            margin-top: 5px;
        }
        input[type="submit"]:hover {
            background-color: #A83D65;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(168, 61, 101, 0.4);
        }
    </style>
</head>
<body>
    @include('navbar')
    <form method="POST" action="{{ route('update-laptop') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $laptop->id }}">
        <div class="form-title">Update Laptop</div>
        <div class="form-subtitle">Isi data baru laptop dengan lengkap</div>
        <div>Input Brand</div>
        <input type="text" name="brand">
        <div>Input Model</div>
        <input type="text" name="model">        
        <div>Input Processor</div>
        <input type="text" name="processor">
        <div>Input RAM</div>
        <input type="number" name="ram">
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>