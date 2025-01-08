@extends('layouts.app')
@section('content')
    <style>
        .slot {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .meal-item {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .meal-img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }
    </style>

    <div class="container mb-5">
        <div class="row">
            <!-- Left Side: Week Slots -->
            <div class="col-md-6">
                <h3 id="week-title">Week 1</h3>
                <div id="week-slots">
                    @for ($day = 1; $day <= 5; $day++)
                        <div class="slot" data-day="{{ $day }}">
                            <button class="add-item-btn btn btn-primary">+ Add Item</button>
                            <span class="selected-meal" id="meal-slot-{{ $day }}"></span>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Right Side: Meals List -->
            <div class="col-md-6">
                <h3>Select Your Meals</h3>
                <input type="text" id="meal-search" class="form-control border" placeholder="Search Meals">

              <select name="" id="day-filter" class="border my-4">
                <option value="">select day</option>
                <option value="1">5 Days</option>
                <option value="2">7 Days</option>
              </select>

                <div id="meal-list" class="meal-list mt-3" style="height: 350px; overflow: scroll">
                    <!-- Meals will be dynamically loaded here -->
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="row mt-4">
            <div class="col-md-6">
                <button class="btn btn-secondary" id="prev-week-btn" disabled>Previous Week</button>
            </div>
            <div class="col-md-6 text-end">
                <button class="btn btn-primary" id="next-week-btn">Next Week</button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        let currentWeek = 1;
        let selectedSlot = null;

        // Fetch meals on page load
        fetchMeals();

        // Search meals
        $('#meal-search').on('input', function() {
            fetchMeals($(this).val(), 'search');
        });

        $('#day-filter').on('change', function() {

            fetchMeals($(this).val(), 'menu-type');
        });

        // Handle slot selection
        $('.add-item-btn').on('click', function() {
            selectedSlot = $(this).closest('.slot').data('day');
            alert('Day ' + selectedSlot + ' selected. Now choose a meal.');
        });

        // Handle meal selection
        $(document).on('click', '.meal-item', function() {
            if (!selectedSlot) {
                alert('Please select a day first.');
                return;
            }

            const mealId = $(this).data('id');
            const mealName = $(this).data('name');

            // Save to database
            $.post('/meal-plan', {
                _token: $('meta[name="csrf-token"]').attr('content'),
                week: currentWeek,
                day: selectedSlot,
                meal_id: mealId,
            }).done(function() {
                // Update UI
                $('#meal-slot-' + selectedSlot).text(mealName);
                selectedSlot = null;
            }).fail(function() {
                alert('Failed to add meal.');
            });
        });

        // Handle week navigation
        $('#next-week-btn').on('click', function() {
            if (currentWeek < 4) {
                currentWeek++;
                updateWeekUI();
            } else {
                alert('All weeks are completed.');
            }
        });

        $('#prev-week-btn').on('click', function() {
            if (currentWeek > 1) {
                currentWeek--;
                updateWeekUI();
            }
        });

        // Update the week UI
        function updateWeekUI() {
            $('#week-title').text('Week ' + currentWeek);
            $('#prev-week-btn').prop('disabled', currentWeek === 1);
            $('#next-week-btn').prop('disabled', currentWeek === 4);

            // Clear slots for the new week
            // $('.selected-meal').text('');
        }

        // Fetch meals
        function fetchMeals(search = '', type = '') {
            $.get('/meals', {
                search: search,
                type: type
            }, function(data) {
                const mealList = $('#meal-list');
                mealList.empty();

                if (data.length === 0) {
                    mealList.append('<p>No meals found.</p>');
                    return;
                }

                data.forEach(meal => {
                    mealList.append(`
                        <div class="meal-item" data-id="${meal.id}" data-name="${meal.name}">
                            <img src="${meal.image || '/default-meal.jpg'}" alt="${meal.name}" class="meal-img">
                            <h5>${meal.name}</h5>
                            <p>${meal.description}</p>
                            <p>${meal.menu_type_id == 1 ? "5 days Plan" : "7 Days Plan"}</p>
                        </div>
                    `);
                });
            });
        }


//     function updateWeekUI() {
//     $('#week-title').text('Week ' + currentWeek);
//     $('#prev-week-btn').prop('disabled', currentWeek === 1);
//     $('#next-week-btn').prop('disabled', currentWeek === 4);

//     // Fetch meals for the current week
//     $.get(`/meal-plan/${currentWeek}`, function(data) {
//         $('.selected-meal').text(''); // Clear all slots
//         data.forEach(plan => {
//             $('#meal-slot-' + plan.day).text(plan.meal_name); // Update the UI with stored meal
//         });
//     }).fail(function() {
//         alert('Failed to fetch meal plan for Week ' + currentWeek);
//     });
// }

});
</script>
@endpush
