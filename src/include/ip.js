//set country code
let ip_info;
let gforms = document.querySelectorAll('.gform_wrapper form .gform_fields');
let gformWrappers = document.querySelectorAll('.gform_wrapper');

function getGeoCodeFromOption(option) {
    let label = option.innerText;
    return label.trim().slice(0, 2);
}

function setDefaultCountryCode() {
    if (gforms) {
        gforms.forEach(gform => {
            let options = gform.querySelectorAll('.country-code select option');
            options.forEach((option, index) => {
                if (index > 0) {

                    let countryCode = getGeoCodeFromOption(option);
                    if (countryCode === ip_info.country) {
                        option.selected = 'selected';
                        // setGeoCode( gform, countryCode );
                    }
                }
            });
        });
    }
}

fetch("https://ipinfo.io/?token=db7984b59b5aa0").then((response) => response.json())
    .then(function (result) {
        ip_info = result;
        setDefaultCountryCode();
    });
