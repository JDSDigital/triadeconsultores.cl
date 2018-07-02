yii.confirm = function (message, okCallback, cancelCallback) {
	swal({
	  title: '¿Desea eliminar este elemento?',
	  text: "Esta acción es irreversible.",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: '¡Si, elimínalo!',
	  cancelButtonText: 'Cancelar'
	}).then((result) => {
	  if (result.value) {
	    okCallback();
	  } else {
			cancelCallback();
		}
	})
};
