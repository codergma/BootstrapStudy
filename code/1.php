<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!--标题-->
    <!--Bootstrap中的标题-->
    <h1>Bootstrap标题一</h1>
    <h2>Bootstrap标题二</h2>
    <h3>Bootstrap标题三</h3>
    <h4>Bootstrap标题四</h4>
    <h5>Bootstrap标题五</h5>
    <h6>Bootstrap标题六</h6>

    <!--Bootstrap中让非标题元素和标题使用相同的样式-->
    <div class="h1">Bootstrap标题一</div>
    <div class="h2">Bootstrap标题二</div>
    <div class="h3">Bootstrap标题三</div>
    <div class="h4">Bootstrap标题四</div>
    <div class="h5">Bootstrap标题五</div>
    <div class="h6">Bootstrap标题六</div>

<!--副标题-->
    <!--Bootstrap中使用了<small>标签来制作副标题-->
    <h1>Bootstrap标题一<small>我是副标题</small></h1><small>我是副标题</small>
    <h2>Bootstrap标题二<small>我是副标题</small></h2>
    <h3>Bootstrap标题三<small>我是副标题</small></h3>
    <h4>Bootstrap标题四<small>我是副标题</small></h4>
    <h5>Bootstrap标题五<small>我是副标题</small></h5>
    <h6>Bootstrap标题六<small>我是副标题</small></h6>

<!--段落-->
<p>段落是排版中另一个重要元素之一。在Bootstrap中为文本设置了一个全局的文本样式（这里所说的文本是指正文文本）</p>
<!--强调内容-->
<p class="lead">如果想让一个段落p突出显示，可以通过添加类名“.lead”实现，其作用就是增大文本字号，加粗文本，而且对行高和margin也做相应的处理。</p>
<!--粗体-->
<p>粗体就是给文本加粗，在普通的元素中我们一般通过font-weight设置为bold关键词给文本加粗。在Bootstrap中，可以使用<b>b</b>和<strong>strong</strong>标签让文本直接加粗。</p>
<!--斜体-->
<p>在排版中，除了用加粗来强调突出的文本之外，还可以使用斜体。斜体类似于加粗一样，除了可以给元素设置样式font-style值为italic实现之外，在Bootstrap中还可以通过使用标签<em>em</em>或<i>i</i>来实现</p>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>