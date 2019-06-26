<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taskmanagement</title>
</head>
<body>
<h1>Task Managemnet</h1>
<form action="{{route("customer.showAdd")}}" method="get">
<button type="submit">ADD</button>
</form>
    <table border="1px">
        <tr>
            <th>STT</th>
            <th>FullName</th>
            <th>PhoneNumber</th>
            <th>Email</th>
            <th>Application</th>
        </tr>
        <?php foreach($customers as $key=>$customer){?>
            <tr>
                <td><?php echo $key+1?></td>
                <td><?php echo $customer->nameCustomer ?></td>
                <td><?php echo $customer->phoneNumber ?></td>
                <td><?php echo $customer->email ?></td>
                <td>
                    <a href="{{route('customer.showEdit',['id'=>$customer->id])}}">Edit</a>
                    <a href="{{route('customer.delete',['id'=>$customer->id])}}">Delete</a>
                </td>
            </tr>
        <?php }?>
    </table>

</body>
</html>
