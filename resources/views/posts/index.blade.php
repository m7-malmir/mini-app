<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست پست‌ها</title>
    <style>
        body {
            direction: rtl;
            font-family: Tahoma, sans-serif;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">لیست پست‌ها</h1>
    <table>
        <thead>
            <tr>
                <th>شناسه</th>
                <th>عنوان</th>
                <th>محتوا</th>
                <th>کاربر</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->user->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
