<?php
    if(isset($_GET['submit'])){
        $food = $_GET['food'];
        $quantity = $_GET['quantity'];
        $type = $_GET['type'];

        echo "<h2>订单详情</h2>";
        echo "您订购的食物是: " . htmlspecialchars($food) . "<br>";
        echo "数量: " . htmlspecialchars($quantity) . "<br>";
        echo "送货地址: " . htmlspecialchars($type) . "<br>";
        echo "<h3>感谢您的订购！</h3>";
    } else {
        echo "<h2>请通过表单提交订单。</h2>";
    }
?>
<!DOCTYPE html>
<html>
<?php include '10-5-header.php'; ?>
<section class="container">
    <div class="h3 text-center">欢迎来到欣欣家常菜</div>
    <form method="GET" action="10-5-makeAnOrder.php" class="bg-white">
        <div class="form-group">
            <label for="food">食物名称:</label>
            <input type="text" id="food" name="food" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="quantity">数量:</label>
            <input type="number" id="quantity" name="quantity" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="quantity">是否打包带走:</label>
            <input type="radio"  name="type" value="打包" required>打包
        </div>
        <input type="submit" name="submit" value="提交订单" class="btn btn-primary">
    </form>
</section>
<?php include '10-6-footer.php'; ?>
</html>
