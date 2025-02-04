document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".btn-delete").forEach((button) => {
    button.addEventListener("click", function () {
      let id = this.getAttribute("data-id");
      let type = this.getAttribute("data-type");
      console.log("ID seleccionado:", id);
      console.log("Tipo seleccionado:", type);

      Swal.fire({
        title: "¿Estás seguro?",
        text: "Esta acción no se puede revertir",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar",
      }).then((result) => {
        if (result.isConfirmed) {
          // Enviar la solicitud AJAX
          fetch("./controller/controller_funciones.php", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify({
              id: id,
              type: type,
            }),
          })
            .then((response) => response.json())
            .then((data) => {
              if (data.status === "success") {
                Swal.fire("Eliminado!", data.message, "success");
                setTimeout(() => {
                  location.reload();
                }, 1000);
              } else {
                Swal.fire("Error!", data.message, "error");
              }
            })
            .catch((error) => {
              console.error("Error:", error);
              Swal.fire(
                "Error!",
                "Hubo un problema al eliminar el elemento.",
                "error"
              );
            });
        }
      });
    });
  });
});
