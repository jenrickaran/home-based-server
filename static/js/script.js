//hide the landingPage main content and fetch the content for the featuresPage
document.getElementById("featuresLink").addEventListener("click", function () {
  const landingPage = document.getElementById("landingPage");
  const featuresPage = document.getElementById("featuresPage");

  landingPage.style.display = "none";

  fetch("features")
    .then((Response) => Response.text())
    .then((html) => {
      featuresPage.style.display = "block";
      featuresPage.innerHTML = html;
      history.pushState({}, "", "/features");
    })
    .catch((error) => {
      console.log("Error: ", error);
    });
});

document
  .getElementById("featuresLinkFooter")
  .addEventListener("click", function () {
    const landingPage = document.getElementById("landingPage");
    const featuresPage = document.getElementById("featuresPage");

    landingPage.style.display = "none";

    fetch("features")
      .then((Response) => Response.text())
      .then((html) => {
        featuresPage.style.display = "block";
        featuresPage.innerHTML = html;
      })
      .catch((error) => {
        console.log("Error: ", error);
      });
  });
