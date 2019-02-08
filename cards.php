<?php $nav="cards"; ?>

<?php include("includes/head.php") ?>


<div class="row">
  <div class="col s3 sidebar">
    <?php include("includes/nav.php") ?>
  </div>
  <div class="col s9">
    <div class="container">
      <h1>Cards</h1>

      <h2>Line card - 2 inner elements</h2>

      <p>Using css class 'two' on a card element "card inline" makes the content spread evenly.</p>

      <div class="card inline clearfix two">
        <div class="card-inline-element icon">
          <i class="fas fa-briefcase"></i>
        </div>
        <div class="card-element-cover">
          <div class="card-inline-element">
            <div class="card-element-header">Name</div>
            <div class="card-element-value">Alfa Deal</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Created On</div>
            <div class="card-element-value">12 Mar 2018</div>
          </div>
        </div>
        <div class="card-inline-element icon last">
          <i class="fas fa-ellipsis-v"></i>
        </div>
      </div>
      <div class="card inline clearfix two">
        <div class="card-inline-element icon">
          <i class="fas fa-briefcase"></i>
        </div>
        <div class="card-element-cover">
          <div class="card-inline-element">
            <div class="card-element-header">Name</div>
            <div class="card-element-value">Alfa Deal</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Created On</div>
            <div class="card-element-value">12 Mar 2018</div>
          </div>
        </div>
        <div class="card-inline-element icon last">
          <i class="fas fa-ellipsis-v"></i>
        </div>
      </div>
      <div class="card inline clearfix two">
        <div class="card-inline-element icon">
          <i class="fas fa-briefcase"></i>
        </div>
        <div class="card-element-cover">
          <div class="card-inline-element">
            <div class="card-element-header">Name</div>
            <div class="card-element-value">Alfa Deal</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Created On</div>
            <div class="card-element-value">12 Mar 2018</div>
          </div>
        </div>
        <div class="card-inline-element icon last">
          <i class="fas fa-ellipsis-v"></i>
        </div>
      </div>

      <p></p>

      <pre class=" language-markup">
      <code class=" language-markup">
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card inline clearfix <span class="focus">two</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-inline-element icon<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fas fa-briefcase<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-cover<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-inline-element<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-header<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               Name
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-value<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               Alfa Deal
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-header<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               Created on
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-value<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               12 Mar 2018
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-inline-element icon last<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fas fa-ellipsis<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      </code>
      </pre>



      <h2>Line card - 3 inner elements</h2>

      <p>Using css class 'three' on a card element "card inline" makes the content spread evenly.</p>

      <div class="card inline clearfix three">
        <div class="card-inline-element icon">
          <i class="fas fa-briefcase"></i>
        </div>
        <div class="card-element-cover">
          <div class="card-inline-element">
            <div class="card-element-header">Name</div>
            <div class="card-element-value">Alfa Deal</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Created By</div>
            <div class="card-element-value">Mark Hudson</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Created On</div>
            <div class="card-element-value">12 Mar 2018</div>
          </div>
        </div>
        <div class="card-inline-element icon last">
          <i class="fas fa-ellipsis-v"></i>
        </div>
      </div>

      <div class="card inline clearfix three">
        <div class="card-inline-element icon">
          <i class="fas fa-briefcase"></i>
        </div>
        <div class="card-element-cover">
          <div class="card-inline-element">
            <div class="card-element-header">Name</div>
            <div class="card-element-value">Alfa Deal</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Created By</div>
            <div class="card-element-value">Mark Hudson</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Created On</div>
            <div class="card-element-value">12 Mar 2018</div>
          </div>
        </div>
        <div class="card-inline-element icon last">
          <i class="fas fa-ellipsis-v"></i>
        </div>
      </div>

      <div class="card inline clearfix three">
        <div class="card-inline-element icon">
          <i class="fas fa-briefcase"></i>
        </div>
        <div class="card-element-cover">
          <div class="card-inline-element">
            <div class="card-element-header">Name</div>
            <div class="card-element-value">Alfa Deal</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Created By</div>
            <div class="card-element-value">Mark Hudson</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Created On</div>
            <div class="card-element-value">12 Mar 2018</div>
          </div>
        </div>
        <div class="card-inline-element icon last">
          <i class="fas fa-ellipsis-v"></i>
        </div>
      </div>

      <pre class=" language-markup">
      <code class=" language-markup">
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card inline clearfix <span class="focus">three</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-inline-element icon<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fas fa-briefcase<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-cover<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-inline-element<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-header<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               Name
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-value<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               Alfa Deal
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-header<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               Created by
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-value<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               Mark Hudson
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-header<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               Created on
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-value<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               12 Mar 2018
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-inline-element icon last<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fas fa-ellipsis<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      </code>
      </pre>



      <h2>Line card - 4 inner elements</h2>

      <p>Using css class 'four' on a card element "card inline" makes the content spread evenly.</p>

      <div class="card inline clearfix four">
        <div class="card-inline-element icon">
          <i class="fas fa-file-pdf"></i>
        </div>
        <div class="card-element-cover">
          <div class="card-inline-element">
            <div class="card-element-header">Name</div>
            <div class="card-element-value">Alfa Deal</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Size</div>
            <div class="card-element-value">5.000.000 USD</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Created By</div>
            <div class="card-element-value">Mark Hudson</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Created On</div>
            <div class="card-element-value">12 Mar 2018</div>
          </div>
        </div>
        <div class="card-inline-element icon last">
          <i class="fas fa-ellipsis-v"></i>
        </div>
      </div>

      <div class="card inline clearfix four">
        <div class="card-inline-element icon">
          <i class="fas fa-file-pdf"></i>
        </div>
        <div class="card-element-cover">
          <div class="card-inline-element">
            <div class="card-element-header">Name</div>
            <div class="card-element-value">Alfa Deal</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Size</div>
            <div class="card-element-value">5.000.000 USD</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Created By</div>
            <div class="card-element-value">Mark Hudson</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Created On</div>
            <div class="card-element-value">12 Mar 2018</div>
          </div>
        </div>
        <div class="card-inline-element icon last">
          <i class="fas fa-ellipsis-v"></i>
        </div>
      </div>

      <div class="card inline clearfix four">
        <div class="card-inline-element icon">
          <i class="fas fa-file-pdf"></i>
        </div>
        <div class="card-element-cover">
          <div class="card-inline-element">
            <div class="card-element-header">Name</div>
            <div class="card-element-value">Alfa Deal</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Size</div>
            <div class="card-element-value">5.000.000 USD</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Created By</div>
            <div class="card-element-value">Mark Hudson</div>
          </div>
          <div class="card-inline-element">
            <div class="card-element-header">Created On</div>
            <div class="card-element-value">12 Mar 2018</div>
          </div>
        </div>
        <div class="card-inline-element icon last">
          <i class="fas fa-ellipsis-v"></i>
        </div>
      </div>

      <pre class=" language-markup">
      <code class=" language-markup">
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card inline clearfix <span class="focus">four</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-inline-element icon<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fas fa-briefcase<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-cover<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-inline-element<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-header<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               Name
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-value<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               Alfa Deal
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-header<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               Size
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-value<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               5.000.000 USD
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-header<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               Created by
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-value<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               Mark Hudson
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-header<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               Created on
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-element-value<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               12 Mar 2018
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-inline-element icon last<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fas fa-ellipsis<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      </code>
      </pre>




    </div>
  </div>
</div>


<?php include("includes/footer.php") ?>

