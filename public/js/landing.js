$(document).ready(function () {
// FORM VALIDATION
// =================================================================
   var faIcon = {
      valid: 'fa fa-check-circle fa-lg text-success',
      invalid: 'fa fa-times-circle fa-lg',
      validating: 'fa fa-refresh'
   };

   $('#contactForm').bootstrapValidator({
      excluded: [':disabled'],
      feedbackIcons: faIcon,
      fields: {
         name: {
            validators: {
               notEmpty: {
                  message: 'Su nombre es requerido'
               }
            }
         },
         email: {
            validators: {
               notEmpty: {
                  message: 'El correo electronico es requerido.'
               }, 
               emailAddress: {
                  message: 'Debe proporcionar un email valido.'
               }
            }
         }
      }}).on('status.field.bv', function (e, data) {
      var $form = $(e.target),
         validator = data.bv,
         $tabPane = data.element.parents('.tab-pane'),
         tabId = $tabPane.attr('id');

      if (tabId) {
         var $icon = $('a[href="#' + tabId + '"][data-toggle="tab"]').parent().find('i');
      }
   });
});