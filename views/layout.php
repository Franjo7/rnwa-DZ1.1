<html>
  <body>
<style>
header {
    background-color: #333;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
  }

  header a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    margin-right: 20px;
  }

  header a:hover {
    text-decoration: underline;
  }

  main {
    padding: 20px;
  }

  footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
  }
</style>

</head>
  <body>
    <header>
      <a href='./'>Početna</a>
      <a href='?controller=customers&action=index'>Customers</a>
      <a href='?controller=employees&action=index'>Employees</a>
      <a href='?controller=orders&action=index'>Orders</a>
    </header>

    <main>
  <?php require_once('routes.php'); ?>
</main>

<footer>
  Copyright &copy; <?php echo date('Y'); ?>
</footer>

</body>
</html>