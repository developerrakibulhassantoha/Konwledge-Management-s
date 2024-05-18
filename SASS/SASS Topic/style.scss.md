
```scss
@import 'variables';

@import 'nesting';

@import 'mixin';

@import 'extend_inheritance';

@import 'mathematical_operations';

@import 'control_directives_if_else';

@import 'control_directives_for';

@import 'contron_directives_each';

@import 'function';

  
  

@media screen and (min-width:576px) {

    .btn-btn{

        font-size: map-get($font-size-responsive,sm);

    }

}

@media screen and (min-width:668px) {

    .btn-btn{

        font-size: map-get($font-size-responsive,md);

    }

}

@media screen and (min-width:992px) {

    .btn-btn{

        font-size: map-get($font-size-responsive,lg);

    }

}

.btn-primary{

    background-color: $danger-color;

    padding: $padding;

    color: $primary-color;

    font-size: $font-size;

  

}

  

.btn-secondary{

    background-color: $danger-color;

    padding: $padding;

    color: $primary-color;

    font-size: $font-size;

}

.btn-warning{

    background-color: $warnig-color;

    padding: $padding;

    color: $danger-color;

    font-size: $font-size;

}

.btn-danger{

    background-color: $secendary-color;

    padding: $padding;

    color: $primary-color;

    font-size: $font-size;

}
```

