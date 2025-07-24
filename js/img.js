const existingicon = document.querySelector("link[rel~='icon']");
if (!existingicon) {
  const link = document.createElement("link");
  link.rel = "icon";
  link.href = "/images/assets/logo.png";

  link.type = "image/png";
  document.head.appendChild(link);
}
