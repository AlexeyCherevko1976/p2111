(function($){
  jQuery.fn.responsiveBlock = function(options){
    options = $.extend({
      defColor:"olive", //цвет элемента над которым нет курсора
      hoverColor:"red" //цвет элемента на который наведен курсор
    }, options);

    var make = function(){
      // здесь переменная this будет содержать отдельный
      // DOM-элемент, к которому и нужно будет применить
      // воздействия плагина
      $(this)
      .css("background-color",options.defColor)
      .mouseenter( function(){
        $(this).css("background-color",options.hoverColor);
        //.trigger('responsiveBlock.stateChange');
      })
      .mouseleave( function(){
        $(this).css("background-color",options.defColor);
        //.trigger('responsiveBlock.stateChange');
      });
    };

    return this.each(make); 
  };


$('.p1').responsiveBlock();
//$('.p1').on('responsiveBlock.stateChange', handler);


//////////////////////////////

// Зададим плагин cDialog, наследуемый от dialog
$.widget("my.cDialog", $.ui.dialog, {

  // настройки dialog автоматически перейдут cDialog,
  options: {
    resizable: false,
    isCollapsed: false
  },

  // конструктор плагина.
  _create: function() {
    // вызовем в нем конструктор родительского плагина
    $.ui.dialog.prototype._create.call(this);

    // в дальнейшем, мы разместим здесь и свои манипуляции
  },

  // деструктор плагина
  destroy: function() {
    // вызовем в нем деструктор родительского плагина
    $.ui.dialog.prototype.destroy.call(this);
  },

  // обработка изменения свойств
  _setOption: function() {
    $.ui.dialog.prototype._setOption.apply( this, arguments );
  }  

});

// установим плагин cDialog на элемент с id = wnd
$("#wnd").cDialog();

})(jQuery);

