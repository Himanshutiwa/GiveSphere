 <?php
 include 'index.php';
 ?>
    <!-- SECTION: UPDATE EVENT -->
            <section id="update" class="content-section">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Update Event Details</h2>
                <div class="bg-white rounded-xl shadow-sm p-8 max-w-3xl border border-gray-100">
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Event Title</label>
                            <input type="text" placeholder="e.g. Winter Clothes Distribution" class="w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Event Date</label>
                                <input type="date" class="w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Location</label>
                                <input type="text" placeholder="City Name" class="w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                            <textarea rows="4" class="w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="Write about event details..."></textarea>
                        </div>
                        <button class="bg-indigo-600 text-white px-6 py-2.5 rounded-lg font-medium hover:bg-indigo-700 transition">Save Event</button>
                    </form>
                </div>
            </section>