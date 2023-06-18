const formHandler = () => {
  const uploadButton = document.querySelectorAll(".upload-button");
  const submitButton = document.querySelector(".submit-button");
  const imgPreview = document.querySelector(".img-preview");
  const status = document.querySelector(".status");
  const inputElements = Array.from(
    document.querySelectorAll(
      "input:not(input[type='radio']):not(input[type='checkbox'])"
    )
  );
  const inputFiles = Array.from(document.querySelectorAll(".input-file"));
  const select = document.getElementsByTagName("select")[0];
  const filterInput = inputElements.filter((input) => input.type != "file");
  // const textarea = document.getElementsByTagName("textarea")[0];
  const textareas = document.querySelectorAll("textarea");

  uploadButton.forEach((button) => {
    button.addEventListener("click", function () {
      button.nextElementSibling.click();
    });
  });

  let elements = [];

  inputElements.forEach((input) => {
    elements.push(input);
  });

  if (select) {
    elements.push(select);
  }
  if (textareas.length >= 1) {
    textareas.forEach((textarea) => {
      elements.push(textarea);
    });
  }

  ["change", "keyup"].forEach((event) => {
    elements.forEach((element) => {
      element.addEventListener(event, () => {
        const inputFilesValue = inputFiles.map((input) => input.files.length);
        const inputValue = filterInput.map((input) => input.value);
        const checkSelect = select == null ? true : select.selectedIndex != 0;
        let checkTextarea =
          textareas.length == 0
            ? true
            : Array.from(textareas).every((textarea) => textarea.value != "");
        const checkInputValue =
          inputValue.length == 0
            ? true
            : inputValue.every((value) => value != "");
        const checkInputFiles =
          inputFilesValue.length == 0
            ? true
            : inputFilesValue.every((value) => value != 0);
        if (
          checkInputValue &&
          checkSelect &&
          checkInputFiles &&
          checkTextarea
        ) {
          submitButton.disabled = false;
        } else {
          submitButton.disabled = true;
        }
      });
    });
  });

  inputFiles.forEach((input) => {
    input.addEventListener("change", function () {
      const getExtension = this.files[0].name.split(".").pop();
      if (
        getExtension == "pdf" ||
        getExtension == "doc" ||
        getExtension == "docx"
      ) {
        this.nextElementSibling.textContent = this.files[0].name;
        this.previousElementSibling.innerHTML = /* HTML */ `<img
            class="me-2"
            src="/images/icons/upload-dokumen.png"
            alt="Icon"
            width="20px"
          />Change Dokumen`;
      } else {
        if (
          this.previousElementSibling.previousElementSibling.classList.contains(
            "img-preview-2"
          )
        ) {
          this.previousElementSibling.previousElementSibling.src =
            URL.createObjectURL(this.files[0]);
          if (
            this.previousElementSibling.previousElementSibling.classList.contains(
              "d-none"
            )
          ) {
            this.previousElementSibling.previousElementSibling.classList.remove(
              "d-none"
            );
          }

          this.previousElementSibling.innerHTML = /* HTML */ `<img
              class="me-2"
              src="/images/icons/upload-dokumen.png"
              alt="Icon"
              width="20px"
            />Change Image`;

          return;
        }

        this.previousElementSibling.innerHTML = /* HTML */ `<img
            class="me-2"
            src="/images/icons/upload-dokumen.png"
            alt="Icon"
            width="20px"
          />Change Image`;

        const newImageSrc = URL.createObjectURL(this.files[0]);

        imgPreview.src = newImageSrc;

        if (status != null) {
          status.classList.remove("d-none");
        }
        if (imgPreview.classList.contains("d-none")) {
          imgPreview.classList.remove("d-none");
        }
      }
    });
  });
};

formHandler();
