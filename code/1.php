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
<h1>标题</h1>
  <h5>Bootstrap中的标题</h5>
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
<!--强调相关的类-->
<div class="text-muted">text-muted,提示，浅灰色</div>
<div class="text-primary">text-primary,主要,蓝色</div>
<div class="text-success">text-success,成功,浅绿色</div>
<div class="text-info">text-info,通知信息,浅蓝色</div>
<div class="text-warning">text-warning,警告,黄色</div>
<div class="text-danger">text-danger,危险,褐色</div>
<!--对齐-->
<div class="text-center">text-center</div>
<div class="text-left">text-left</div>
<div class="text-right">text-right</div>
<div class="text-justify">text-justify</div>
<!--去点列表-->
<ul class="list-unstyled">
  <li>1.去点列表</li>
  <li>2.使用类</li>
  <li>3.list-unstyled</li>
</ul>
<!--内联列表-->
<ul class="list-inline">
  <li>内联列表</li>
  <li>使用类</li>
  <li>list-inline</li>
</ul>
<!--水平定义列表-->
<dl class="dl-horizontal">
  <dt>dt</dt>
  <dd>dd</dd>
  <dt>dt</dt>
  <dd>dd</dd>
</dl>
<!--代码-->
<code>code单行代码</code>
<pre>pre多行代码</pre>
<kbd>用户输入代码</kbd>
<!--控制代码大小-->
<pre class="pre-scrollable">pre-scrollable控制代码区域最大高度340px，超出高度出现y轴</pre>
<!--表格-->
<table>
  <thead>
    <th>表格标题</th>
    <th>表格标题</th>
    <th>表格标题</th>
  </thead>
  <tbody>
    <tr>
      <td>表格单元</td>
      <td>表格单元</td>
      <td>表格单元</td>
    </tr>
    <tr>
      <td>表格单元</td>
      <td>表格单元</td>
      <td>表格单元</td>
    </tr>
  </tbody>
</table>

<h1>基础表格</h1>
<table class="table">
  <thead>
    <th>表格标题</th>
    <th>表格标题</th>
    <th>表格标题</th>
  </thead>
  <tbody>
    <tr>
      <td>表格单元</td>
      <td>表格单元</td>
      <td>表格单元</td>
    </tr>
    <tr>
      <td>表格单元</td>
      <td>表格单元</td>
      <td>表格单元</td>
    </tr>
  </tbody>
</table>
<h1>斑马线表格</h1>
<table class="table table-striped">
  <thead>
    <th>表格标题</th>
    <th>表格标题</th>
    <th>表格标题</th>
  </thead>
  <tbody>
    <tr>
      <td>表格单元</td>
      <td>表格单元</td>
      <td>表格单元</td>
    </tr>
    <tr>
      <td>表格单元</td>
      <td>表格单元</td>
      <td>表格单元</td>
    </tr>
  </tbody>
</table>
<h1>带边框的表格</h1>
<table class="table table-bordered">
  <thead>
    <th>表格标题</th>
    <th>表格标题</th>
    <th>表格标题</th>
  </thead>
  <tbody>
    <tr>
      <td>表格单元</td>
      <td>表格单元</td>
      <td>表格单元</td>
    </tr>
    <tr>
      <td>表格单元</td>
      <td>表格单元</td>
      <td>表格单元</td>
    </tr>
  </tbody>
</table>
<h1>鼠标悬停高亮的表格</h1>
<table class="table table-hover"> <thead>
    <th>表格标题</th>
    <th>表格标题</th>
    <th>表格标题</th>
  </thead>
  <tbody>
    <tr>
      <td>表格单元</td>
      <td>表格单元</td>
      <td>表格单元</td>
    </tr>
    <tr>
      <td>表格单元</td>
      <td>表格单元</td>
      <td>表格单元</td>
    </tr>
  </tbody>
</table>
<h1>紧凑型表格</h1>
<table class="table table-condensed"> <thead>
    <th>表格标题</th>
    <th>表格标题</th>
    <th>表格标题</th>
  </thead>
  <tbody>
    <tr>
      <td>表格单元</td>
      <td>表格单元</td>
      <td>表格单元</td>
    </tr>
    <tr>
      <td>表格单元</td>
      <td>表格单元</td>
      <td>表格单元</td>
    </tr>
  </tbody>
</table>
<h1>响应式表格</h1>
<table class="table table-condensed"> <thead>
    <th>表格标题</th>
    <th>表格标题</th>
    <th>表格标题</th>
  </thead>
  <tbody>
    <tr>
      <td>表格单元</td>
      <td>表格单元</td>
      <td>表格单元</td>
    </tr>
    <tr>
      <td>表格单元</td>
      <td>表格单元</td>
      <td>表格单元</td>
    </tr>
  </tbody>
</table>
<h1>表格行的类</h1>
<table class="table table-bordered">
 <thead>
    <th>类名</th>
    <th>描述</th>
  </thead>
  <tbody>
    <tr class="active">
      <td>active</td>
      <td>表示当前活动的信息</td>
    </tr>
    <tr class="success">
      <td>success</td>
      <td>成功或正确的行为</td>
    </tr>
    <tr class="info">
      <td>info</td>
      <td>中立的信息或行为</td>
    </tr>
    <tr class="warning">
      <td>info</td>
      <td>警告</td>
    </tr>
    <tr class="danger">
      <td>danger</td>
      <td>危险错误</td>
    </tr>
  </tbody>
</table>

<h1>基础表单</h1>
<form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">邮箱：</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="请输入您的邮箱地址">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">密码</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入您的邮箱密码">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> 记住密码
    </label>
  </div>
  <button type="submit" class="btn btn-default">进入邮箱</button>
</form>

<h1>水平表单</h1>
<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="请输入您的邮箱地址">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="请输入您的邮箱密码">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> 记住密码
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">进入邮箱</button>
    </div>
  </div>
</form>
<h1>内联表单</h1>
<form class="form-inline" role="form">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail2">邮箱</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="请输入你的邮箱地址">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword2">密码</label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="请输入你的邮箱密码">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> 记住密码
    </label>
  </div>
  <button type="submit" class="btn btn-default">进入邮箱</button>
</form> 
<h3>表单控件input</h3> 
<form role="form">
  <div class="form-group">
    <input type="email" class="form-control" placeholder="enter email">
  </div>
</form>
<h3>表单控件select</h3>
<form role='form'>
  <div class="form-group">
    <select class="form-control">
      <option>1</option>
      <option>2</option>
      <option>3</option>
    </select>
    <select multiple="multiple" class="form-control">
      <option>1</option>
      <option>2</option>
      <option>3</option>
    </select>
  </div>
</form>
<h3>表单控件textarea</h3>
<form role="form">
  <div class="form-group">
    <textarea class="form-control" rows="4"></textarea>
  </div>
</form>
<h3>表单控件checkbox,radio</h3>
<form role="form">
  <div class="checkbox">
    <label>
      <input type="checkbox" >
      记住密码
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionRadios" id="optionRadios1" value="love">
      喜欢
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionRadios" id="optionRdios2" value="hate">
      不喜欢
    </label>
  </div>
</form>
<h3>checkbox,radio水平排列</h3>
<form>
  <div class="form-group">
   <label class="checkbox-inline">
     <input type="checkbox" value="option1">
     旅游
   </label> 
   <label class="checkbox-inline">
     <input type="checkbox" value="option2">
     摄影
   </label> 
   <label class="checkbox-inline">
     <input type="checkbox" value="option3">
     健身
   </label> 
  </div>
  <div>
    <label class="radio-inline">
      <input type="radio" value="option1" name="sex">
      男
    </label>
    <label class="radio-inline">
      <input type="radio" value="option2" name="sex">
      女
    </label>
  </div>
</form>
<h3>表单控件大小</h3>
<input type="text" class="form-control input-sm" palceholder="小">
<input type="text" class="form-control" palceholder="正常">
<input type="text" class="form-control input-lg" palceholder="大">
<h3>控件状态</h3>
<form>
  <input type="text" class="form-control" placeholder="禁用状态" disabled>
  <div class="form-group has-success">
      <input type="text" class="form-control " placeholder="验证成功状态" >
  </div>
  <div class="form-group has-warning">
    <input type="text" class="form-control " placeholder="验证警告状态" >
  </div>
  <div class="form-group has-error">
  <input type="text" class="form-control " placeholder="验证失败状态" >
  </div>
</form>
<h3>提示状态</h3>
 <span class="help-block">您输入的信息是正确的</span> 
<h1>按钮</h1>
<button class="btn" type="button">基本按钮</button>
<button class="btn btn-default" type="button">默认按钮</button>
<h3>通过其他标签也可以制作按钮,但是最好使用button,a制作按钮</h3>
<input type="submit" value="input标签" class="btn btn-default" />
<a href="##" class="btn btn-default">a标签</a>
<span class='btn btn-default'>span标签</span>
<div class="btn btn-default">div标签</div>
<h3>定制风格</h3>
<button class="btn btn-primary">主要按钮btn-primary</button>
<button class="btn btn-success">成功按钮btn-success</button>
<button class="btn btn-info">信息按钮btn-info</button>
<button class="btn btn-warning">警告按钮btn-warning</button>
<button class="btn btn-danger">危险按钮btn-danger</button>
<button class="btn btn-danger">链接按钮btn-link</button>
<h3>按钮大小</h3>
<button class="btn btn-lg">大</button>
<button class="btn">正常</button>
<button class="btn btn-sm">小</button>
<button class="btn btn-xm">超小</button>
<h3>块状按钮</h3>
<button class="btn btn-lg btn-block">大</button>
<button class="btn btn-block">正常</button>
<button class="btn btn-sm btn-block">小</button>
<button class="btn btn-xm btn-block">超小</button>
<h3>禁用状态</h3>
<button class="btn btn-default" disabled="disabled">禁用状态</button>
<button class="btn btn-primar y" disabled="disabled">禁用状态</button>
<button class="btn btn-success" disabled="disabled">禁用状态</button>
<button class="btn btn-info" disabled="disabled">禁用状态</button>
<h1>图像</h1>
<div style="width:140px;height:140px;">
<img src="/img/test.jpg" >
</div>
<div style="width:140px;height:140px;">
<img src="/img/test.jpg" class="img-rounded">
</div>
<div style="width:140px;height:140px;">
<img src="/img/test.jpg" class="img-responsive img-circle">
</div>
<div style="width:140px;height:140px;">
<img src="/img/test.jpg" class="img-thumbnial">
</div>
<div style="width:140px;height:140px;">
<img src="/img/test.jpg" class="img-responsive">
</div>
<h1>图标</h1>
<span class="glyphicon glyphicon-search"></span>
<span class="glyphicon glyphicon-asterisk"></span>
<span class="glyphicon glyphicon-plus"></span>
<span class="glyphicon glyphicon-cloud"></span>


<h1>网格系统</h1>
<div class="container">
  <div class="row">
    <div style="border:solid 1px #000"class="col-md-4">4</div>
    <div style="border:solid 1px #000"class="col-md-4">4</div>
    <div style="border:solid 1px #000"class="col-md-4">4</div>
  </div>
  <div class="row">
    <div style="border:solid 1px #000"class="col-md-2">2</div>
    <div style="border:solid 1px #000"class="col-md-6">6</div>
    <div style="border:solid 1px #000"class="col-md-4">4</div>
  </div>
</div>
<h3>列偏移</h3>
<div class="container">
  <div class="row">
    <div style="border:solid 1px #000" class="col-md-2">2</div>
    <div style="border:solid 1px #000" class="col-md-2 col-md-offset-1">2</div>
    <div style="border:solid 1px #000" class="col-md-2 col-md-offset-1">2</div>
    <div style="border:solid 1px #000" class="col-md-3 col-md-offset-1">3</div>
  </div>
</div>
<h3>列排序</h3>
  <div class="container">
    <div class="row">
      <div style="border:solid 1px #000" class="col-md-4 col-md-push-8">col-md-push-8</div>
      <div style="border:solid 1px #000" class="col-md-8 col-md-pull-4">col-md-pull-4</div>
    </div> 
  </div>
<h3>嵌套</h3>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
       <div style="background:pink;" class="col-md-6">col-md-6</div> 
       <div style="background:pink;" class="col-md-6">col-md-6</div> 
      </div>
      <div class="col-md-4">
        <div style="background:pink;"class="col-md-4">col-md-4</div>
        <div style="background:pink;" class="col-md-4">col-md-4</div>
        <div style="background:pink;" class="col-md-4">col-md-4</div>
      </div>
    </div>
  </div>
<h1>下拉菜单</h1>
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
     下拉菜单
     <span class="caret"></span> 
    </button>
    <ul class="dropdown-menu">
      <li class="dropdown-header">第一部分</li>
      <li class="active"><a tableindex="-1" href="#">下拉菜单项</a></li>
      <li ><a tableindex="-1" href="#">下拉菜单项</a></li>
      <li ><a tableindex="-1" href="#">下拉菜单项</a></li>
      <li class="divider"></li>
      <li class="dropdown-header">第二部分</li>
      <li class="disabled"><a tableindex="-1" href="#">下拉菜单项2</a></li>
      <li ><a tableindex="-1" href="#">下拉菜单项22</a></li>
      <li ><a tableindex="-1" href="#">下拉菜单项222</a></li>
    </ul>
  </div>
<h1>按钮组</h1>
  <div class="btn-group">
    <button  type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-step-backward"></span>
    </button>
    <button  type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-backward"></span>
    </button>
    <button  type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-fast-backward"></span>
    </button>
  </div>
<h1>按钮工具栏</h1>
  <div class="btn-toolbar">
    <div class="btn-group">
      <button class="btn btn-default">
        <span class="glyphicon glyphicon-align-left" ></span>
      </button>
      <button class="btn btn-default">
        <span class="glyphicon glyphicon-align-center" ></span>
      </button>
      <button class="btn btn-default">
        <span class="glyphicon glyphicon-align-right" ></span>
      </button>
      <button class="btn btn-default">
        <span class="glyphicon glyphicon-align-justify" ></span>
      </button>
    </div>
    <div class="btn-group">
      <div class="btn btn-default">
        <span class="glyphicon glyphicon-font"></span>
      </div>
      <div class="btn btn-default">
        <span class="glyphicon glyphicon-bold"></span>
      </div>
      <div class="btn btn-default">
        <span class="glyphicon glyphicon-italic"></span>
      </div>
    </div>
  </div>
<h1>嵌套分组</h1>
<div class="btn-group">
  <div type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    关于我们
    <span class="caret"></span>
  </div>
  <ul class="dropdown-menu">
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
  </ul>
</div>
<h1>垂直分组</h1>
<div class="btn-group-vertical">
  <div class="btn btn-default">首页</div>
  <div class="btn btn-default">产品展示</div>
  <div class="btn btn-default">关于我们</div>
</div>
<h1>等分按钮</h1>
<div class="btn-group btn-group-justified">
  <div class="btn btn-default">首页</div>
  <div class="btn btn-default">产品展示</div>
  <div class="btn btn-default">关于我们</div>
</div>
<h1>向上三角形</h1>
<div class="btn-group dropup">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
向上按钮 <span class="caret"></span>
</button>
<ul class="dropdown-menu">
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
</ul>
</div>
<div class="btn-group dropup">
    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">按钮下拉菜单<span class="caret"></span></button>
    <ul class="dropdown-menu">
         <li><a href="##">按钮下拉菜单项</a></li>
         <li><a href="##">按钮下拉菜单项</a></li>
         <li><a href="##">按钮下拉菜单项</a></li>
         <li><a href="##">按钮下拉菜单项</a></li>
    </ul>
</div>
<div>导航</div>
<ul class="nav nav-tabs">
  <li><a href="">HOME</a></li>
  <li class="active"><a href="">JS</a></li>
  <li class="disabled"><a href="">CSS</a></li>
</ul>
<ul class="nav nav-pills">
  <li><a href="">HOME</a></li>
  <li class="active"><a href="">JS</a></li>
  <li class="disabled"><a href="">CSS</a></li>
</ul>
<ul class="nav nav-stacks">
  <li><a href="">HOME</a></li>
  <li class="active"><a href="">JS</a></li>
  <li class="disabled"><a href="">CSS</a></li>
</ul>
<ul class="nav nav-tabs nav-justfied">
  <li><a href="">HOME</a></li>
  <li class="active"><a href="">JS</a></li>
  <li class="disabled"><a href="">CSS</a></li>
</ul>
<ul class="nav nav-tabs">
  <li><a href="">HOME</a></li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown">课程<span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="">CSS</a></li>
      <li><a href="">CSS</a></li>
      <li><a href="">CSS</a></li>
    </ul>
  </li>
  <li class="disabled"><a href="">CSS</a></li>
</ul>
<ol class="breadcrumb">
  <li><a href="">1</a></li>
  <li><a href="">2</a></li>
  <li><a href="">3</a></li>
</ol>
<h1>导航条</h1>
<div class="navbar navbar-default ">
  <div class="navbar-header"><a class="navbar-brand">header</a></div>
  <ul class="nav navbar-nav">
    <li><a href="">1</a></li>
    <li class="dropdown">
      <a href="##" class="dropdown-toggle" data-toggle="dropdown">2<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a>4</a></li>
        <li><a>5</a></li>
        <li><a>6</a></li>
        <li><a>7</a></li>
      </ul>
    </li>
    <li><a href="">3</a></li>
  </ul>
</div>
<div class="navbar navbar-default navbar-fixed-top">
  <ul class="nav navbar-nav">
    <li><a >1</a></li>
    <li><a >2</a></li>
    <li><a >3</a></li>
  </ul>
</div>
<div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
      data-target=".navbar-responsive-collapse">
      <span class="sr-only"> Toggle Navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="##" class="navbar-brand">header</a>
  </div>
  <div class="collapse navbar-collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li><a href="##">首页</a></li>
      <li><a href="##">首页</a></li>
      <li><a href="##">首页</a></li>
    </ul>
  </div>
</div>
<div class="navbar navbar-inverse">
  <div class="navbar-header">
    <a href="##" class="navbar-brand">HEADER</a>
  </div>
  <ul class="nav navbar-nav">
    <li><a href="##">1</a></li>
    <li><a href="##">1</a></li>
    <li><a href="##">1</a></li>
  </ul>
</div>
<ul class="pagination">
  <li><a href="##">&laquo</a></li>
  <li class="active"><a href="##">1</a></li>
  <li><a href="##">2</a></li>
  <li><a href="##">3</a></li>
  <li class="disabled"><a href="##">&raquo</a></li>
</ul>

<span class="label label-default">default</span>
<span class="label label-success">success</span>
<span class="label label-primary">primary</span>
<span class="label label-info">info</span>
<span class="label label-warning">warning</span>
<span class="label label-danger">danger</span>
<span class="badge">123</span>

<h1>缩略图</h1>
<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="##" class="thumbnail">
      <img src="/img/test.jpg"  >
    </a>
    <div class="caption">
      <h3>headhead</h3>
      <p>paragraphppparagrapharagrapharagraph</p>
    </div>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="##" class="thumbnail">
      <img src="/img/test.jpg"  >
    </a>
    <div class="caption">
      <h3>headhead</h3>
      <p>paragraphppparagrapharagrapharagraph</p>
    </div>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="##" class="thumbnail">
      <img src="/img/test.jpg"  >
    </a>
    <div class="caption">
      <h3>headhead</h3>
      <p>paragraphppparagrapharagrapharagraph</p>
    </div>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="##" class="thumbnail">
      <img src="/img/test.jpg"  >
    </a>
    <div class="caption">
      <h3>headhead</h3>
      <p>paragraphppparagrapharagrapharagraph</p>
    </div>
  </div>
</div>
<div class="alert alert-success">success</div>
<div class="alert alert-info">info</div>
<div class="alert alert-warning">warning</div>
<div class="alert alert-danger">danger</div>

<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times</button>
  操作成功
</div>
<div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times</button>
  info
</div>
<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times</button>
  info
</div>
<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times</button>
  info
</div>
<div class="alert alert-success">
  <a href="##" class="alert-link">this is a link</a>
</div>
<h1>进度条</h1>
<div class="progress">
  <div class="progress-bar" style="width:40%;"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-success" style="width:40%;"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-info" style="width:40%;"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-warning" style="width:40%;"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-danger" style="width:40%;"></div>
</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" style="width:40%;"></div>
</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-info" style="width:40%;"></div>
</div>
<div class="progress progress-striped active">
  <div class="progress-bar progress-bar-info" style="width:40%;"></div>
</div>
<div class="progress progress-striped active">
  <div class="progress-bar progress-bar-success" style="width:20%;"></div>
  <div class="progress-bar progress-bar-info" style="width:20%;"></div>
  <div class="progress-bar progress-bar-danger" style="width:20%;"></div>
</div>
<div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
</div>
<h1>媒体对象</h1>
<h1>列表组</h1>
<ul class="list-group">
  <li class="list-group-item">1<span class="badge">11</span></li>
  <li class="list-group-item">2</li>
  <li class="list-group-item">3</li>
  <li class="list-group-item">4</li>
</ul>
<h1>面板</h1>
<div class="panel panel-default">
  <div class="panel-heading">HEADER</div>
  <div class="panel-body">body</div>
  <div class="panel-footer">footer</div>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">HEADER</div>
  <div class="panel-body">body</div>
  <div class="panel-footer">footer</div>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">HEADER</div>
  <div class="panel-body">
    <table class="table table-border">
      <thead>
       <tr>
         <th>1</th>
         <th>2</th>
         <th>3</th>
       </tr> 
      </thead>
      <tbody>
       <tr>
        <td>one</td> 
        <td>two</td> 
        <td>three</td> 
       </tr> 
      </tbody>
    </table>
  </div>
  <div class="panel-footer">footer</div>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">header</div>
  <div class="panel-body">body</div>
  <ul class="list-group">
    <li class="list-group-item">1</li>
    <li class="list-group-item">2</li>
    <li class="list-group-item">3</li>
  </ul>
  <div class="panel-footer">footer</div>
</div>

<h1>模态对话框</h1>
<div class="modal show">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"></div>
      <div class="modal-body"></div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>
<script src="/jquery-1.11.3.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
  </body>
</html>