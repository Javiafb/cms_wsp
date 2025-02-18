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
                // Retrasar la recarga de la página
                setTimeout(() => {
                  location.reload();
                }, 1000); // 1000 milisegundos
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

  // esta es la funciona para llamar al modal de edicion

  document.querySelectorAll(".btn-edit").forEach((button) => {
    button.addEventListener("click", function () {
      let id_gru = this.getAttribute("data-gru");
      let type = this.getAttribute("data-type");
      let nombre = this.getAttribute("data-nombre");
      let enlace = this.getAttribute("data-enlace");
      let categoria = this.getAttribute("data-categoria");
      let pclave = this.getAttribute("data-pclave");
      let img = this.getAttribute("data-img");

      console.log(id_gru, type, nombre, enlace, categoria, pclave, img);

      document.getElementById("editId").value = id_gru;
      document.getElementById("editType").value = type;
      document.getElementById("editNombre").value = nombre;
      document.getElementById("editEnlace").value = enlace;
      document.getElementById("editCategoria").value = categoria;
      document.getElementById("editPclave").value = pclave;
      document.getElementById("editImgPreview").src =
        "http://localhost/cms_wsp/public/img/grupo-img/" + img;

      var editModal = new bootstrap.Modal(document.getElementById("editModal"));
      editModal.show();
    });
  });

  document
    .getElementById("editImg")
    .addEventListener("change", function (event) {
      const [file] = event.target.files;
      if (file) {
        document.getElementById("editImgPreview").src =
          URL.createObjectURL(file);
      }
    });

  document
    .getElementById("editForm")
    .addEventListener("submit", function (event) {
      event.preventDefault();

      let formData = new FormData(this);

      fetch("./controller/controller_editar.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.status === "success") {
            Swal.fire("Actualizado!", data.message, "success");
            setTimeout(() => {
              location.reload();
            }, 2000);
          } else {
            Swal.fire("Error!", data.message, "error");
          }
        })
        .catch((error) => {
          console.error("Error:", error);
          Swal.fire(
            "Error!",
            "Hubo un problema al actualizar el grupo.",
            "error"
          );
        });
    });
});
