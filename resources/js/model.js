$(document).ready(function () {
    $("#list").click(function (event) {
        event.preventDefault();
        $(".item").removeClass("col-lg-4");
        $(".item").removeClass("col-md-6");
        $(".item").addClass("col-lg-12");
    });
    $("#grid").click(function (event) {
        event.preventDefault();
        $(".item").removeClass("col-lg-12");
        $(".item").addClass("col-lg-4");
    });

    $(".list-group-item-action").click(function () {
        var keyword = $(this).text().toLowerCase();
        // var $items = $(".item");

        $(".filter-brand").each(function () {
            var productName = $(this).text().toLowerCase();

            if (productName.indexOf(keyword) === -1) {
                $(this).closest(".item").hide();
            } else {
                $(this).closest(".item").show();
            }
        });
    });

    $(".view-all").click(function () {
        $(".item").removeClass("col-lg-12 col-lg-6");
        $(".item").addClass("col-lg-4");
        $(".item").show();
    });

    let priceGap = 100;

    $(".price-input input").each(function () {
        $(this).on("input", function (e) {
            let minPrice = parseInt($(".price-input input")[0].value);
            let maxPrice = parseInt($(".price-input input")[1].value);

            if (
                maxPrice - minPrice >= priceGap &&
                maxPrice <= $(".range-input input")[1].max
            ) {
                if ($(e.target).hasClass("input-min")) {
                    $(".range-input input")[0].value = minPrice;
                    $(".slider .progress").css(
                        "left",
                        (minPrice / $(".range-input input")[0].max) * 100 + "%"
                    );
                } else {
                    $(".range-input input")[1].value = maxPrice;
                    $(".slider .progress").css(
                        "right",
                        100 -
                            (maxPrice / $(".range-input input")[1].max) * 100 +
                            "%"
                    );
                }
            }
        });
    });

    $(".range-input input").each(function () {
        $(this).on("input", function (e) {
            let minVal = parseInt($(".range-input input")[0].value);
            let maxVal = parseInt($(".range-input input")[1].value);

            if (maxVal - minVal < priceGap) {
                if ($(e.target).hasClass("range-min")) {
                    $(".range-input input")[0].value = maxVal - priceGap;
                } else {
                    $(".range-input input")[1].value = minVal + priceGap;
                }
            } else {
                $(".price-input input")[0].value = minVal;
                $(".price-input input")[1].value = maxVal;
                $(".slider .progress").css(
                    "left",
                    (minVal / $(".range-input input")[0].max) * 100 + "%"
                );
                $(".slider .progress").css(
                    "right",
                    100 - (maxVal / $(".range-input input")[1].max) * 100 + "%"
                );
            }
        });
    });
});
