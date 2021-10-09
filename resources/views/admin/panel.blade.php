<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Клиенты СТО - Админка</title>
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success" style="color: green;">
            {{ session('success') }}
        </div>
    @endif
    <div>
        <h1>Клиенты</h1>
    </div>
    <div><a href="/">На главную</a> | <a href="route(admin.logout)"></a></div>
    <div>
        <ul>
            <!-- <li><input type="button" value="123" id="elem"><span id="resp"></span></li> -->
            @foreach($phones as $phone)
                <li>
                    <a href="tel:{{ $phone->telnumber }}">{{ $phone->telnumber }}</a>
                    <span> | </span>
                    <span>{{ $phone->created_at->format('d M Y H:i') }}</span>
                    <!-- <input type="button" class="delete-number" value="-"> -->
                </li>
            @endforeach
        </ul>
    </div>
    <script>
        let x = null;
        console.log(elem);
        window.onload = function() {
            let buttons = document.getElementsByClassName('delete-number');
            Array.from(buttons).map(function(e) {
                e.onclick = () => {
                    alert();
                }
                console.log(e.value);
            })
            elem.onclick = function() {
                fetch('/fox').then(r => r.text()).then(r => resp.innerHTML = r);
            }
        }
    </script>
</body>
</html>