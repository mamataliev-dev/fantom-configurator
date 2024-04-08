// Init Swiper
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// Get responsive height of carousel img
const appHeight = () =>
  document.documentElement.style.setProperty(
    "--address-bar-height",
    `${window.innerHeight}px`
  );
window.addEventListener("resize", appHeight);
appHeight();

var openSceneWindow = document.querySelectorAll(".open-scene-window");
var openMainWindow = document.querySelector(".open-main-window");
var openAboutWindow = document.querySelector(".open-about-window");
var openContactWindow = document.querySelector(".open-contact-window");
var openGalleryWindow = document.querySelector(".open-gallery-window");
var openProfileWindow = document.querySelector(".open-profile-window");
var openFaqWindow = document.querySelector(".open-faq-window");
var backBtn = document.querySelector(".back-btn");
var shapeToggle = document.getElementById("shapeToggle");
var chatModal = document.querySelector(".chat-modal");
var isSceneClosed = false;
var openSceneWindowMobile = document.querySelectorAll(".carousel__btn-start");
var closeScene = document.querySelector(".close-scene-window");

// Windows
const windows = {
  main: document.querySelector(".main-window"),
  about: document.querySelector(".about-window"),
  contact: document.querySelector(".contact-window"),
  gallery: document.querySelector(".gallery-window"),
  profile: document.querySelector(".profile-window"),
  faq: document.querySelector(".faq-window"),
  scene: document.querySelector(".scene-window"),
};

function checkForHideClass() {
  if (windows.main.classList.contains("hide")) {
    backBtn.classList.remove("hide");
  } else {
    backBtn.classList.add("hide");
    chatModal.classList.remove("hide");
    Object.values(windows).forEach((window) => {
      window.classList.add("hide");
    });
  }
}

// Toggle windows classes
function toggleWindowClasses(activeWindow) {
  Object.values(windows).forEach((window) => {
    const isActive = window === activeWindow;
    window.classList.toggle("hide", !isActive);
    window.classList.toggle("active", isActive);
  });
}

openMainWindow.addEventListener("click", () => {
  toggleWindowClasses(windows.main);
  checkForHideClass();
  clearAllSceneElements();

  if (document.getElementById("scene").classList.contains("active")) {
    location.reload();
  }
});

openAboutWindow.addEventListener("click", () => {
  toggleWindowClasses(windows.about);
  checkForHideClass();
});

openContactWindow.addEventListener("click", () => {
  toggleWindowClasses(windows.contact);
  checkForHideClass();
});

openGalleryWindow.addEventListener("click", () => {
  toggleWindowClasses(windows.gallery);
  checkForHideClass();
});

openProfileWindow.addEventListener("click", () => {
  toggleWindowClasses(windows.profile);
  checkForHideClass();
});

openFaqWindow.addEventListener("click", () => {
  toggleWindowClasses(windows.faq);
  checkForHideClass();
});

// Save Scene Background to LocalStorage
var kitchenScene = document.querySelectorAll(".kitchen-scene");
var chosenKitchen = "kitchen-black";

kitchenScene.forEach((scene) => {
  scene.addEventListener("click", (e) => {
    var sceneTarget = e.target;
    var sceneAttr = sceneTarget.getAttribute("data-scene");
    chosenKitchen = sceneAttr;
  });
});

openSceneWindow.forEach((btn) => {
  btn.addEventListener("click", () => {
    chatModal.classList.add("hide");
    toggleWindowClasses(windows.scene);
    checkForHideClass();
    startSceneConfigurator();
    openMainWindow.style.display = "none";
    closeScene.classList.remove("hide");
    closeScene.classList.add("active");
  });
});

closeScene.addEventListener("click", () => {
  location.reload();
});

openSceneWindowMobile.forEach((btn) => {
  btn.addEventListener("click", () => {
    chatModal.classList.add("hide");
    toggleWindowClasses(windows.scene);
    checkForHideClass();
    startSceneConfigurator();
  });
});

var loadingModal = document.getElementById("loadingModal");

function showLoadingModal() {
  loadingModal.style.display = "flex";
  console.log("downloading...");
}

function hideLoadingModal() {
  loadingModal.style.display = "none";
  console.log("downloaded");
}

// Drop Dwon List
var secondNavBtn = document.querySelector(".second-nav-btn");
var secondDropDown = document.querySelector(".second-nav-drop-down");
var secondBlackout = document.querySelector(".second-blackout");
var dropDownBtns = document.querySelectorAll(".drop-down-btn");

secondNavBtn.addEventListener("click", () => {
  secondDropDown.classList.add("open");
  secondBlackout.classList.add("active");
});

// Close balckout modal
document.addEventListener("click", (e) => {
  if (e.target.classList.contains("second-blackout")) {
    secondDropDown.classList.remove("open");
    secondBlackout.classList.remove("active");
  }
});

dropDownBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    secondDropDown.classList.remove("open");
    secondBlackout.classList.remove("active");
  });
});

// Chat Modal
var chatBtnClose = document.querySelector(".chat-popup-btn-close");
var chat = document.querySelector(".chat-popup");
var openChatBtn = document.querySelector(".open-chat-btn");
var blackoutWhite = document.querySelector(".blackout-white");
var chatSendBtn = document.querySelector(".chat-popup-send-btn");

chatSendBtn.addEventListener("click", (e) => e.preventDefault());

openChatBtn.addEventListener("click", () => {
  chat.classList.add("open");
  blackoutWhite.classList.add("active");
});

chatBtnClose.addEventListener("click", (e) => {
  e.preventDefault();
  chat.classList.remove("open");
  blackoutWhite.classList.remove("active");
});

document.addEventListener("click", (e) => {
  if (e.target.classList.contains("blackout-white")) {
    blackoutWhite.classList.remove("active");
    chat.classList.remove("open");
  }
});

// Open Request Modal
var requestCloseBtn = document.querySelectorAll(".request-close-btn");
var requestBlackout = document.querySelector(".request-blackout");
var contactFormSendBtn = document.querySelector(".contact-form-send-btn");

contactFormSendBtn.addEventListener("click", (e) => {
  e.preventDefault();
  requestBlackout.classList.add("active");
});

requestCloseBtn.forEach((element) => {
  element.addEventListener("click", () => {
    requestBlackout.classList.remove("active");
  });
});

document.addEventListener("click", (e) => {
  if (e.target.classList.contains("request-blackout")) {
    requestBlackout.classList.remove("active");
  }
});

document
  .querySelector(".profile__form")
  .addEventListener("click", (e) => e.preventDefault());

// Scene
var customArr = [];
var countItems = 0;
var productArr = [];
var productMaskChairs = "BarStool1";
var productMaskLamps = "lamp1";

// Options Btns
var optionsBtnSave = document.querySelectorAll(".options-btn-save");
var optionsBtn3d = document.querySelector(".options-btn-3d");
var optionsBtnDownload = document.querySelector(".options-btn-download");
var optionsBtnPrint = document.querySelector(".options-btn-print");
var optionsBtnShare = document.querySelectorAll(".options-btn-share");
var openOptionsBtn = document.querySelector(".open-options-btn");
var optionsMobileBtn = document.querySelector(".open-options-btn");

// Option Modals
var shareModal = document.querySelector(".share-blackout");
var savedModal = document.querySelector(".saved-modal");
var savedModalBlackout = document.querySelector(".saved-blackout");
var savedModalEmpty = document.querySelector(".saved-modal-empty");
var downloadModalBlackout = document.querySelectorAll(".download-blackout");
var downloadModal = document.querySelectorAll(".download-modal");
var optionsBoxMobile = document.querySelector(".options-box-mobile");
var optionsContainer = document.querySelector(".options-container");

// Option Btns Close Modals
var btnCloseShareModal = document.querySelectorAll(".close-share-modal");
var btnCloseSavedModal = document.querySelectorAll(".close-saved-modal");
var btnMoveToGallary = document.querySelector(".check-out-saved-modal");

// Show Order List
var orderList = document.querySelector(".order__list");
var moveUpBtn = document.querySelector(".move-up");

moveUpBtn.addEventListener("click", () => {
  orderList.classList.toggle("open");
  moveUpBtn.classList.toggle("down");
});

// Show Options Btn Tips
var optionsBtn = document.querySelectorAll(".options__btn");
var optionsTip = document.querySelectorAll(".options__tip");

optionsBtn.forEach((button) => {
  button.addEventListener("mouseover", (e) => {
    var buttonTarget = e.target;
    var buttonAttr = buttonTarget.getAttribute("data-tip");

    optionsTip.forEach((el) => {
      var elAttr = el.getAttribute("data-tip");

      if (buttonAttr === elAttr) {
        el.classList.add("active");
      } else {
        el.classList.remove("active");
      }
    });
  });

  // Hide Options Tips
  button.addEventListener("mouseout", (e) => {
    var buttonTarget = e.target;
    var buttonAttr = buttonTarget.getAttribute("data-tip");

    optionsTip.forEach((el) => {
      var elAttr = el.getAttribute("data-tip");

      if (buttonAttr === elAttr) {
        el.classList.remove("active");
      }
    });
  });
});

btnCloseShareModal.forEach((el) => {
  el.addEventListener("click", () => {
    shareModal.classList.remove("active");
  });
});

btnCloseSavedModal.forEach((el) => {
  el.addEventListener("click", () => {
    savedModalBlackout.classList.remove("active");
    savedModalEmpty.classList.remove("active");
    savedModal.classList.remove("active");
  });
});

// Open Mobile Options Menu / Hide Desktop Options menu
optionsMobileBtn.addEventListener("click", () => {
  optionsContainer.classList.toggle("open");
  checkOpenMenu();
});

// Open Options Modal
optionsBtn.forEach((button) => {
  button.addEventListener("click", (e) => {
    var buttonTarget = e.target;
    var buttonAttr = buttonTarget.getAttribute("data-tip");

    switch (buttonAttr) {
      case "share":
        shareModal.classList.add("active");
        break;
      case "save":
        if (customArr.length !== 0) {
          savedModalBlackout.classList.add("active");
          savedModal.classList.add("active");
        } else {
          savedModalBlackout.classList.add("active");
          savedModalEmpty.classList.add("active");
        }
        break;
      case "download":
        downloadModalBlackout.forEach((el) => {
          el.classList.add("active");
        });

        downloadModal.forEach((el) => {
          el.classList.add("active");
        });
        break;
      case "share":
        shareModal.classList.add("active");
        break;
      default:
        break;
    }
  });
});

// Remove All Blackouts From Modals
document.addEventListener("click", (e) => {
  const clickedElement = e.target;
  const modalBlackoutClasses = [
    "share-blackout",
    "saved-blackout",
    "download-blackout",
  ];

  if (
    modalBlackoutClasses.some((className) =>
      clickedElement.classList.contains(className)
    )
  ) {
    shareModal.classList.remove("active");
    savedModalBlackout.classList.remove("active");
    savedModalEmpty.classList.remove("active");
    savedModal.classList.remove("active");

    downloadModalBlackout.forEach((el) => el.classList.remove("active"));
    downloadModal.forEach((el) => el.classList.remove("active"));
  }
});

// Custon Item Btns
var customItemBtn = document.querySelectorAll(".custom-item-btn");
var customDropList = document.querySelectorAll(".custom-drop-list");
var customBtn = document.querySelector(".custom-btn");
var removeBtn = document.querySelectorAll(".custom-item-remove");
var custom = document.querySelector(".custom");
var lastClickedButton = null;

// Open Cusotm Menu Items
customItemBtn.forEach((button) => {
  button.addEventListener("click", (e) => {
    var btn = e.target;
    var buttonAttr = btn.getAttribute("data-item");

    customDropList.forEach((el) => {
      var listAttr = el.getAttribute("data-item");
      if (buttonAttr == listAttr) {
        el.classList.toggle("open");
      } else {
        el.classList.remove("open");
      }
    });

    button.classList.toggle("open");

    if (lastClickedButton && lastClickedButton !== button) {
      lastClickedButton.classList.remove("open");
    }

    lastClickedButton = button;
  });
});

// Open Custom Menu
customBtn.addEventListener("click", () => {
  custom.classList.toggle("open");

  if (!custom.classList.contains("open")) {
    customItemBtn.forEach((el) => el.classList.remove("open"));
    customDropList.forEach((el) => el.classList.remove("open"));
  }

  checkOpenMenu();
});

// Custom Objects Chairs
var objectBarStoolsBtn = document.querySelectorAll(".object-bar-stool-btn");
var barStoolsImg = document.querySelectorAll(".bar-stool-img");

objectBarStoolsBtn.forEach((button) => {
  customObjectsHandler(button, barStoolsImg);
});

// Custom Objects Lamps
var objectLamp = document.querySelectorAll(".object-lamp-btn");
var lampImg = document.querySelectorAll(".lamp-img");

objectLamp.forEach((button) => {
  customObjectsHandler(button, lampImg);
});

// Custom Objects Fartuk
var objectFartukBtn = document.querySelectorAll(".object-fartuk-btn");
var fartukImg = document.querySelectorAll(".fartuk-img");

objectFartukBtn.forEach((button) => {
  customObjectsHandler(button, fartukImg);
});

// Custom Objects Portuquet
var objectParquetBtn = document.querySelectorAll(".object-parquet-btn");
var portuquetImg = document.querySelectorAll(".portuquet-img");

objectParquetBtn.forEach((button) => {
  customObjectsHandler(button, portuquetImg);
});

// Custom Objects Handler
function customObjectsHandler(button, object) {
  button.addEventListener("click", (e) => {
    const objectBtn = e.target;
    const objectBtnAttr = objectBtn.getAttribute("data-object");
    const objectBtnMaskAttr = objectBtn.getAttribute("data-mask");
    const objectRemoveAttr = objectBtn.getAttribute("data-remove");

    // Toggle visibility of objects
    object.forEach((el) => {
      const objectAttr = el.getAttribute("data-object");
      el.classList.toggle("object-visible", objectAttr === objectBtnAttr);
    });

    // Update product mask based on clicked button
    if (objectBtnMaskAttr === "chairs") {
      productMaskChairs = objectBtnAttr;
    } else if (objectBtnMaskAttr === "lamps") {
      productMaskLamps = objectBtnAttr;
    }

    // Handle remove button clicks
    removeBtn.forEach((btn) => {
      const btnAttr = btn.getAttribute("data-remove");

      if (btnAttr === objectRemoveAttr) {
        btn.classList.add("active");

        btn.addEventListener("click", () => {
          object.forEach((el) => {
            const elProduct = el.getAttribute("data-product");

            if (el.classList.contains("object-visible")) {
              const indexProductArr = productArr.findIndex(
                (item) => item.elProduct === elProduct
              );
              const indexCustomArr = customArr.findIndex(
                (item) => item.elProduct === elProduct
              );
              if (indexProductArr !== -1 || indexCustomArr !== -1) {
                productArr.splice(indexProductArr, 1);
                customArr.splice(indexCustomArr, 1);
                countItems--;
              }
            }

            el.classList.remove("object-visible");
            btn.classList.remove("active");
          });
        });
      }
    });

    // Update object product visibility
    checkObjectProduct(object);
  });
}

// Check Object Product
function checkObjectProduct(product) {
  product.forEach((el) => {
    var elProduct = el.getAttribute("data-product");
    var elPrice = el.getAttribute("data-price");

    if (el.classList.contains("object-visible")) {
      var existingProductIndex = customArr.findIndex(
        (item) => item.elProduct === elProduct
      );
      var existingProductIndexPr = productArr.findIndex(
        (item) => item.elProduct === elProduct
      );

      if (existingProductIndex === -1 || existingProductIndexPr === -1) {
        customArr.push({
          elProduct,
          elPrice,
        });

        productArr.push({
          elProduct,
          elPrice,
        });

        countItems++;
      }
    } else {
      var existingItemIndex = customArr.findIndex(
        (item) => item.elProduct === elProduct
      );
      var existingProductIndex = productArr.findIndex(
        (item) => item.elProduct === elProduct
      );

      if (existingItemIndex !== -1 || existingProductIndex !== -1) {
        customArr.splice(existingItemIndex, 1);
        productArr.splice(existingProductIndex, 1);
        countItems--;
      }
    }
  });
}

optionsBtnSave.forEach((element) => {
  element.addEventListener("click", () => {
    pushProductsToSavedModal();
  });
});

document.addEventListener("click", () => pushProductsOrder());

// Push Products to Order
function pushProductsOrder() {
  const orderList = document.querySelector(".order__list");
  const orderCount = document.querySelector(".order__count");

  orderList.innerHTML =
    customArr.length !== 0
      ? ""
      : '<span style="color: black;">No products yet</span>';

  // orderList.innerHTML = "No product yet"
  customArr.forEach((item) => {
    const { elProduct: product, elPrice: price } = item;
    const itemElement = document.createElement("div");

    itemElement.classList.add("order__item", "d-flex", "flex-column");
    itemElement.innerHTML = `
      <span class="order__item_title">${product}</span>
      <span class="order__item_price">$${price}</span>
    `;

    orderList.appendChild(itemElement);
  });

  orderCount.textContent = `${countItems} ${
    countItems === 1 ? "item" : "items"
  }`;
}

// Save Products To Saved Modal
function pushProductsToSavedModal() {
  var savedModalItems = document.querySelector(".saved-modal__items");
  savedModalItems.innerHTML = "";

  productArr.forEach((item) => {
    var product = item.elProduct;
    var price = item.elPrice;
    var savedItem = document.createElement("div");

    savedItem.innerHTML = `
        <div class="saved-modal__item d-flex">
            <h5 class="saved-modal__item_title h5">${product} &nbsp;</h5>
            <h5 class="saved-modal__item-price">$${price}</h5>
        </div>
    `;

    savedModalItems.appendChild(savedItem);
  });
}

// Close Custom Menu if Options Menu is open
function checkOpenMenu() {
  if (custom.classList.contains("open")) {
    optionsContainer.classList.remove("open");
  } else if (optionsContainer.classList.contains("open")) {
    custom.classList.remove("open");
  } else {
    custom.classList.remove("open");
  }
}

// Open Popup notify
var closePopup = document.querySelector(".close-popup");
var popupBlackout = document.querySelector(".popup-blackout");

var popupMobile = window.matchMedia("(max-width: 912px)").matches;

if (popupMobile) popupBlackout.classList.add("active");

closePopup.addEventListener("click", () => {
  popupBlackout.classList.remove("active");
});

document.addEventListener("click", (e) => {
  if (e.target.classList.contains("popup-blackout")) {
    popupBlackout.classList.remove("active");
  }
});

// Zooming / Panzoom;
var container = document.querySelector("#myPanzoom");
var zoomInButton = document.getElementById("zoomInButton");
var zoomOutButton = document.getElementById("zoomOutButton");

var maxScale = 5;
var isMobile = window.matchMedia("(max-width: 912px)").matches;

var panzoomInstance = new Panzoom(container, {
  disablePan: maxScale <= 1,
  minScale: isMobile ? 0.3 : 1,
  startScale: 1,
  increment: 0.1,
  contain: isMobile ? false : "outside",
  disableZoom: false,
});

if (isMobile) {
  container.addEventListener("wheel", panzoomInstance.zoomWithWheel);
  panzoomInstance.setOptions({ cursor: "grab" });
}

// Masks
var masks = document.querySelectorAll(".mask_btn");

zoomInButton.addEventListener("click", () => panzoomInstance.zoomIn());
zoomOutButton.addEventListener("click", () => panzoomInstance.zoomOut());

// Handle Images Loading
function loadImageWithModal(imageElement, url) {
  showLoadingModal();

  setTimeout(() => {
    function onLoad() {
      hideLoadingModal();
      imageElement.removeEventListener("load", onLoad);
    }

    if (imageElement.complete && imageElement.naturalWidth !== 0) {
      hideLoadingModal();
    } else {
      imageElement.addEventListener("load", onLoad);
      imageElement.addEventListener("error", onLoad);
    }
  }, 2000);

  imageElement.src = url;
}

// Get Chosen Scene
function startSceneConfigurator() {
  // Get scene-kitchen
  var kitchen = chosenKitchen;

  var sceneImg = document.getElementById("scene-img");
  loadImageWithModal(
    sceneImg,
    `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/View1/Jpeg/Background.jpg`
  );

  // Show Camera View
  var cameraView = document.querySelector(".camera-view");
  var cameraViewBtn = document.querySelectorAll(".options-btn-3d");
  var viewScene = document.querySelector(".view-scene");
  var cameraItemView = document.querySelectorAll(".camera__item");
  var view1 = document.querySelector(".view1");
  var view2 = document.querySelector(".view2");
  var view3 = document.querySelector(".view3");
  var foregroundBlack = document.querySelector(".foreground-black");
  var foregroundBlackView2 = document.querySelector(".foreground-black-view2");
  var foregroundRed = document.querySelector(".foreground-red");
  var foregroundRedView2 = document.querySelector(".foreground-red-view2");
  var viewNum = "View1";

  var wallPattern = document.getElementById("wall-pattern");
  var chair = document.getElementById("chair");
  var floor = document.getElementById("floor");
  var lamp = document.getElementById("lamp");

  floor.style = "display: block";
  lamp.style = "display: block";
  chair.style = "display: block";

  // Scene Masks
  var kitchenBlackMasks = document.querySelector(".kitchen-black-masks");
  var kitchenRedMasks = document.querySelector(".kitchen-red-masks");
  var kitchenWhiteMasks = document.querySelector(".kitchen-white-masks");
  var maskWallPanels = document.querySelector(".mask-wall-panels");
  var maskChairs = document.querySelector(".mask-chairs");
  var maskFloor = document.querySelector(".mask-floor");
  var maskLamps = document.querySelector(".mask-lamps");
  var kitchenView1 = document.querySelectorAll(".kitchen-view1");
  var kitchenView2 = document.querySelectorAll(".kitchen-view2");
  var kitchenView3 = document.querySelectorAll(".kitchen-view3");

  // Scene Custom Items
  var chairsCustomImg = document.querySelector(".custom-chairs-img");
  var floorCustomImg = document.querySelector(".floor-custom-img");
  var lampsCustomImg = document.querySelector(".custom-lamps-img");

  // Scene Custom Items
  var customFartuks = document.querySelectorAll(".custom-fartuk");
  var customFloors = document.querySelectorAll(".custom-parquet");
  var customChairs = document.querySelectorAll(".custom-chair");
  var customLamps = document.querySelectorAll(".custom-lamp");

  // Scene Objects
  var objectFloor = document.querySelectorAll(".portuquet-img");
  var objectFartuk = document.querySelectorAll(".fartuk-img");
  var objectChair = document.querySelectorAll(".bar-stool-img");
  var objectLamp = document.querySelectorAll(".lamp-img");
  var chirsBox = document.querySelector(".bar-stools");
  var portuquetsBox = document.querySelector(".portuquets");
  var lampsBox = document.querySelector(".lamps");

  // Change camera view images
  cameraViewBtn.forEach((element) => {
    element.addEventListener("click", () => {
      viewScene.classList.add("hide");
      cameraView.classList.add("active");
      custom.classList.remove("open");
      loadImageWithModal(
        view1,
        `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/View1/Jpeg/Final.jpg`
      );
      loadImageWithModal(
        view2,
        `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/View2/Jpeg/Final.jpg`
      );
      loadImageWithModal(
        view3,
        `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/View3/Jpeg/Final.jpg`
      );
    });
  });

  // Kitchens foreground
  switch (kitchen) {
    case "kitchen-black":
      foregroundBlack.classList.add("active");
      foregroundRed.classList.remove("active");
      break;
    case "kitchen-red":
      foregroundRed.classList.add("active");
      foregroundBlack.classList.remove("active");
      break;
    default:
      foregroundBlack.classList.remove("active");
      foregroundRed.classList.remove("active");
      break;
  }

  // Open Chosen Camera View
  cameraItemView.forEach((view) => {
    view.addEventListener("click", (e) => {
      const viewTarget = e.target;
      const viewAttr = viewTarget.getAttribute("data-view");

      viewNum = viewAttr;
      changeObjectsView(viewNum);
      changeMasksView(viewNum);
      changeObjectMaksView(viewNum);

      // Set background image
      loadImageWithModal(
        sceneImg,
        `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewAttr}/Jpeg/Background.jpg`
      );

      viewScene.classList.remove("hide");
      cameraView.classList.remove("active");
      portuquetsBox.classList.remove("hide");

      switch (viewAttr) {
        case "View1":
          if (kitchen === "kitchen-black") {
            foregroundRed.classList.remove("active");
            foregroundRedView2.classList.remove("active");
            foregroundBlackView2.classList.remove("active");
            foregroundBlack.classList.add("active");
            floor.style = "display: block";
          }
          if (kitchen === "kitchen-red") {
            foregroundBlackView2.classList.remove("active");
            foregroundBlack.classList.remove("active");
            foregroundRed.classList.add("active");
            foregroundRedView2.classList.remove("active");
            floor.style = "display: block";
            lamp.style = "display: block";
            lampsBox.style = "display: block";
            portuquetsBox.style = "display: block";
          }
          if (kitchen === "kitchen-white") {
            foregroundRed.classList.remove("active");
            foregroundRedView2.classList.remove("active");
            foregroundBlackView2.classList.remove("active");
            foregroundBlack.classList.remove("active");
            chair.style = "display: block";
            lamp.style = "display: block";
            lampsBox.style = "display: block";
            chirsBox.style = "display: block";
          }
          break;
        case "View2":
          if (kitchen === "kitchen-white") {
            foregroundRed.classList.remove("active");
            foregroundRedView2.classList.remove("active");
            foregroundBlackView2.classList.remove("active");
            foregroundBlack.classList.remove("active");
            chirsBox.style = "display: none";
            chair.style = "display: none";
            lamp.style = "display: none";
            lampsBox.style = "display: none";
          }
          if (kitchen === "kitchen-red") {
            foregroundBlackView2.classList.remove("active");
            foregroundBlack.classList.remove("active");
            foregroundRed.classList.remove("active");
            foregroundRedView2.classList.add("active");
            floor.style = "display: block";
            lamp.style = "display: block";
            lampsBox.style = "display: block";
            portuquetsBox.style = "display: block";
          }
          if (kitchen === "kitchen-black") {
            foregroundRed.classList.remove("active");
            foregroundRedView2.classList.remove("active");
            foregroundBlackView2.classList.add("active");
            foregroundBlack.classList.remove("active");
            floor.style = "display: block";
          }
          break;
        case "View3":
          if (kitchen === "kitchen-white") {
            chair.style = "display: block";
            lampsBox.style = "display: none";
            chirsBox.style = "display: block";
            floor.style = "display: block";
          }
          if (kitchen === "kitchen-black" || kitchen === "kitchen-red") {
            floor.style = "display: none";
          }
          if (kitchen === "kitchen-red") {
            foregroundRed.classList.remove("active");
            foregroundRedView2.classList.remove("active");
            lampsBox.style = "display: none";
            lamp.style = "display: none";
            foregroundRed.classList.remove("active");
            foregroundBlackView2.classList.remove("active");
            portuquetsBox.style = "display: none";
          }
          if (kitchen === "kitchen-black") {
            foregroundBlackView2.classList.remove("active");
            foregroundBlack.classList.remove("active");
            portuquetsBox.classList.add("hide");
          } else {
            portuquetsBox.classList.remove("hide");
          }
          break;
      }
    });
  });

  var mobileOptionsBtns = document.querySelectorAll(".option_btn_mobile");

  // Close OptionsModal for mobile
  mobileOptionsBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      var mediaQuery = window.matchMedia("(max-width: 912px)");

      if (mediaQuery.matches) {
        optionsContainer.classList.remove("open");
      }
    });
  });

  var maskBtn = document.querySelectorAll(".mask_btn");
  var maskWallPanels = document.querySelector(".mask-wall-panels");
  var maskChairs = document.querySelector(".mask-chairs");
  var maskFloor = document.querySelector(".mask-floor");
  var maskLamps = document.querySelector(".mask-lamps");

  maskBtn.forEach((button) => {
    button.addEventListener("click", (e) => {
      var buttonTarget = e.target;
      var buttonAttr = buttonTarget.getAttribute("data-mask");

      switch (buttonAttr) {
        case "wall-pattern":
          showMasks(maskWallPanels, buttonAttr);
          break;
        case "chairs":
          showMasks(maskChairs, buttonAttr);
          break;
        case "floor":
          showMasks(maskFloor, buttonAttr);
          break;
        case "lamps":
          showMasks(maskLamps, buttonAttr);
          break;
        default:
          break;
      }

      checkOpenMenu();
    });
  });

  // Show forEach Masks
  function showMasks(mask, customMenu) {
    // Remove Masks
    setTimeout(() => {
      mask.classList.remove("active");
    }, 200);

    // Check Chosen Product Mask
    var maskAttr = mask.getAttribute("data-mask");
    mask.classList.add("active");

    switch (maskAttr) {
      case "chairs":
        mask.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Masks/Png/${productMaskChairs}.png`;
        break;
      case "lamps":
        mask.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Masks/Png/${productMaskLamps}.png`;
        break;
      case "floor":
        mask.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Masks/Png/Parquet.png`;
        break;
      case "wall-pattern":
        mask.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Masks/Png/KitchenFartuk.png`;
        break;
      default:
        break;
    }

    // Open Custom Menu
    customItemBtn.forEach((button) => {
      const buttonAttr = button.getAttribute("data-mask");
      button.classList.toggle("open", buttonAttr === customMenu);
    });

    customDropList.forEach((el) => {
      const listAttr = el.getAttribute("data-mask");
      el.classList.toggle("open", listAttr === customMenu);
    });

    custom.classList.add("open");
  }

  // Show Maks Block
  switch (kitchen) {
    case "kitchen-black":
      kitchenBlackMasks.classList.add("active");
      break;
    case "kitchen-red":
      kitchenRedMasks.classList.add("active");
      break;
    case "kitchen-white":
      kitchenWhiteMasks.classList.add("active");
      break;
    default:
      break;
  }

  // Show View Masks
  function changeMasksView(view) {
    switch (view) {
      case "View1":
        kitchenView1.forEach((el) => el.classList.add("active"));
        kitchenView2.forEach((el) => el.classList.remove("active"));
        kitchenView3.forEach((el) => el.classList.remove("active"));
        break;
      case "View2":
        kitchenView1.forEach((el) => el.classList.remove("active"));
        kitchenView2.forEach((el) => el.classList.add("active"));
        kitchenView3.forEach((el) => el.classList.remove("active"));
        break;
      case "View3":
        kitchenView1.forEach((el) => el.classList.remove("active"));
        kitchenView2.forEach((el) => el.classList.remove("active"));
        kitchenView3.forEach((el) => el.classList.add("active"));
        break;
      default:
        break;
    }
  }

  // Show View Object Masks
  function changeObjectMaksView(view) {
    maskWallPanels.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Masks/Png/KitchenFartuk.png`;
    maskChairs.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Masks/Png/BarStool1.png`;
    maskLamps.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Masks/Png/Lamp1.png`;
    maskFloor.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Masks/Png/Parquet.png`;
  }

  // Change Chairs Custom img
  if (kitchen === "kitchen-black") {
    chairsCustomImg.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/kitchen-black/Detailed/BarStool1.jpg`;
  } else if (kitchen === "kitchen-white") {
    chairsCustomImg.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/kitchen-white/Detailed/BarStool1.jpg`;
  }

  // Change Lamps Custom img
  switch (kitchen) {
    case "kitchen-black":
      lampsCustomImg.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/kitchen-black/Detailed/Lamp1.jpg`;

      break;
    case "kitchen-red":
      lampsCustomImg.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/kitchen-red/Detailed/Lamp1.jpg`;

      break;
    case "kitchen-white":
      lampsCustomImg.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/kitchen-white/Detailed/Lamp1.jpg`;

      break;
    default:
      break;
  }

  // Wall Pattern Custom
  customFartuks.forEach((img, index) => {
    img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/Detailed/KitchenFartuk${
      index + 1
    }.jpg`;
  });

  // Floor Custom
  customFloors.forEach((img, index) => {
    img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/Detailed/Parquet${
      index + 1
    }.jpg`;
  });

  // Chair Custom
  customChairs.forEach((img, index) => {
    if (kitchen == "kitchen-white") {
      var kitchenWhiteChair = document.querySelector(".kitchen-white-chair");
      kitchenWhiteChair.style = "display: none";
    }

    img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/Detailed/BarStool${
      index + 1
    }.jpg`;
  });

  // Lamp Custom
  var kitchenRedLamp = document.querySelectorAll(".kitchen-red-lamp");
  var kitchenWhiteLamp = document.querySelectorAll(".kitchen-white-lamp");

  customLamps.forEach((img, index) => {
    switch (kitchen) {
      case "kitchen-red":
        kitchenRedLamp.forEach((el) => (el.style = "display: block"));
        kitchenWhiteLamp.forEach((el) => (el.style = "display: block"));

        img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/Detailed/Lamp${
          index + 1
        }.jpg`;

        break;
      case "kitchen-white":
        kitchenRedLamp.forEach((el) => (el.style = "display: none"));
        kitchenWhiteLamp.forEach((el) => (el.style = "display: none"));

        img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/Detailed/Lamp${
          index + 1
        }.jpg`;

        break;
      default:
        kitchenRedLamp.forEach((el) => (el.style = "display: none"));
        kitchenWhiteLamp.forEach((el) => (el.style = "display: block"));

        img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/Detailed/Lamp${
          index + 1
        }.jpg`;

        break;
    }
  });

  // Chair Objects
  objectChair.forEach((img, index) => {
    if (kitchen === "kitchen-red") {
      chair.style = "display: none";
    } else {
      img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Png/BarStool${
        index + 1
      }.png`;
    }
  });

  // Lamp Objects
  objectLamp.forEach((img, index) => {
    img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Png/Lamp${
      index + 1
    }.png`;
  });

  // Floor Objects
  objectFloor.forEach((img, index) => {
    img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Png/Parquet${
      index + 1
    }.png`;
  });

  // Wall pattern Objects
  objectFartuk.forEach((img, index) => {
    if (kitchen == "kitchen-white") {
      wallPattern.style = "display: none";
    } else {
      wallPattern.style = "display: block";

      img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${viewNum}/Png/KitchenFartuk${
        index + 1
      }.png`;
    }
  });

  // Change Objects By ViewNum
  function changeObjectsView(view) {
    // Lamp Objects
    objectLamp.forEach((img, index) => {
      img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Png/Lamp${
        index + 1
      }.png`;
    });

    // Chair Objects
    objectChair.forEach((img, index) => {
      if (kitchen == "kitchen-red") {
        chair.style.display = "none";
      } else {
        img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Png/BarStool${
          index + 1
        }.png`;
      }
    });

    // Floor Objects
    objectFloor.forEach((img, index) => {
      img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Png/Parquet${
        index + 1
      }.png`;
    });

    // Wall pattern Objects (Fartuk)
    objectFartuk.forEach((img, index) => {
      if (kitchen == "kitchen-white") {
        wallPattern.style.display = "none";
      } else {
        img.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/${view}/Png/KitchenFartuk${
          index + 1
        }.png`;
      }
    });
  }

  // Change Floor Custom img
  floorCustomImg.src = `https://fantomstudio.uz/wp-content/themes/fantom/template-configurator/img/${kitchen}/Detailed/Parquet1.jpg`;
}
