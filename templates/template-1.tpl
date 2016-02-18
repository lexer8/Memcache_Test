<html>
<head>
    <meta charset="UTF-8">
    <title>{$site_name}</title>

    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th{
            background-color: #4CAF50;
            color: #ffffff;
            font-size: 18px;
            height: 40px;
            text-align: center;
            border-bottom: 1px solid #dddddd;
        }
        td{
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #dddddd;
            border-left: 1px solid #dddddd;
        }
        .first{
            width: 5px;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        tr:hover{
            background-color: darkgrey;
        }
        #alert {
            padding: 8px 35px 8px 14px;
            margin-bottom: 18px;

            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;

            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

    </style>

</head>
<body onload="changeStyle(el)">
    <h1 id="alert">Данные получены из </h1>
    <hr>
    <div>
        <table>
            <tr>
                <th class="first">№</th>
                <th>Название Книги</th>
                <th>Автор</th>
                <th>Год издания</th>
                <th>Количество страниц</th>
                <th>Цена</th>
            </tr>
        {foreach from=$text key=myId item=i}
            <tr>
                <td class="first">{$myId+1})</td>
                <td style="text-align: left"><strong>{$i.title}</strong></td>
                <td>{$i.author}</td>
                <td>{$i.year}</td>
                <td>{$i.page_count}</td>
                <td>{$i.price} грн.</td>
            </tr>
        {/foreach}
        </table>
    </div>
</body>

<script>
    var el = document.getElementById('alert');

    function changeStyle(el){
        if ("{$title}"=="DB"){
            el.style.color = '#a94442';
            el.style.background = '#f2dede';
            el.style.border = '1px solid #a94442';
            el.innerHTML += 'Базы Данных:';
        } else {
            el.style.color = '#468847';
            el.style.background = '#dff0d8';
            el.style.border = '1px solid #468847';
            el.innerHTML += 'Кэш-памяти (время хранения 10 сек.): ';
        }
    }
</script>

</html>