php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>联系我们 - HAEG</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        nav {
            background-color: #444;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        section {
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .contact-info {
            margin-top: 20px;
        }
        .contact-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>联系我们 - HAEG</h1>
    </header>
    <nav>
        <a href="index.php">首页</a>
        <a href="about.php">关于我们</a>
        <a href="project.php">项目</a>
        <a href="end.php">联系我们</a>
    </nav>
    <section>
        <h2>联系方式</h2>
        <div class="contact-info">
            <p><strong>Email:</strong> info@haeg.org</p>
            <p><strong>电话:</strong> +1234567890</p>
            <p><strong>地址:</strong> 123 Main Street, City, Country</p>
        </div>
        <h2>留言</h2>
        <form action="submit_message.php" method="post">
            <label for="name">姓名:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="message">留言:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br>
                        <!-- 修改提交按钮为普通按钮，并添加JavaScript触发表单提交 -->
            <button type="button" id="submitBtn">提交</button>
        </form>
    </section>
    <footer>
        <p>&copy; 2024 HAEG - 航天模拟器组织. All rights reserved.</p>
    </footer>

    <!-- 添加JavaScript代码 -->
    <script>
        document.getElementById('submitBtn').addEventListener('click', function() {
            var form = document.getElementById('messageForm');
            form.action = 'process_message.php'; // 设置表单提交的目标地址为处理留言的PHP脚本
            form.submit(); // 提交表单
        });
    </script>
</body>
</html>