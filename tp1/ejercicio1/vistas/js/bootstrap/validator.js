$('#form').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'fa fa-check',

        invalid: 'fa fa-hand-paper',

        validating: 'fa fa-circle'

    },

    fields: {

        titulo: {

            validators: {

                notEmpty: {

                    message: 'El titulo de usuario es requerido'

                }

            }

        },

        actores: {

            validators: {

                notEmpty: {

                    message: 'El titulo de usuario es requerido'

                }

            }

        },
        año: {

            validators: {

                notEmpty: {

                    message: 'El titulo de usuario es requerido'

                },

                stringLength: {
                    max: 4,
                    message: 'Maximo 4 caracteres'
                }


            }
        },

        duracion: {


            validators: {

                stringLength: {
                    max: 3,
                    message: 'Maximo 3 caracteres'
                }


            }
        },

        apellido: {

            validators: {

                notEmpty: {

                    message: 'El apellido del usuario es requerido'

                }

            }

        },

        inputTwitter: {

            validators: {

                notEmpty: {

                    message: 'El twitter de usuario es requerido'

                }

            }

        },

        regexp: {


            message: 'Ingrese una cadena valida'
        }

    }

});
