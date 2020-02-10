$(document).ready(function() {
    var $make = $("#make"),
        $model = $("#model"),
        $options = $model.find("option");

    $make
        .on("change", function() {
            // We now filter model using the data-make attribute, not value
            $model.html($options.filter('[data-make="' + this.value + '"]'));
            $model.trigger("change");
        })
        .trigger("change");

    $("#carForm").submit(function(e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        let data = {};
        for (let i = 0; i < formData.length; i++) {
            data[formData[i].name] = formData[i].value;
        }
    });
});
