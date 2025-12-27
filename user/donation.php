<?php
 include 'index.php';
 ?>       <!-- SECTION: DONATION TABLE -->
            <section id="donation" class="content-section">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Recent Donations</h2>
                <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
                    <table class="w-full text-left">
                        <thead class="bg-gray-50 border-b border-gray-100">
                            <tr>
                                <th class="p-4 font-semibold text-gray-700">Donor Name</th>
                                <th class="p-4 font-semibold text-gray-700">Date</th>
                                <th class="p-4 font-semibold text-gray-700">Amount</th>
                                <th class="p-4 font-semibold text-gray-700">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="hover:bg-gray-50 transition">
                                <td class="p-4">Rahul Sharma</td>
                                <td class="p-4 text-gray-600">22 Dec 2023</td>
                                <td class="p-4 font-bold text-green-600">₹5,000</td>
                                <td class="p-4"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Completed</span></td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="p-4">Amit Patel</td>
                                <td class="p-4 text-gray-600">20 Dec 2023</td>
                                <td class="p-4 font-bold text-green-600">₹2,500</td>
                                <td class="p-4"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Completed</span></td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="p-4">Sneha Gupta</td>
                                <td class="p-4 text-gray-600">18 Dec 2023</td>
                                <td class="p-4 font-bold text-green-600">₹10,000</td>
                                <td class="p-4"><span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-semibold">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
