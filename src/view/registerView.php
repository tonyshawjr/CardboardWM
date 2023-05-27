<?php include_once 'header.php'; ?>
<div class="flex items-center justify-center h-screen bg-gray-200">
    <div class="bg-white p-16 rounded shadow-2xl w-2/3 space-y-8" id="step-1">
        <h2 class="text-3xl font-bold mb-10 text-gray-800">Step 1: Company Info</h2>
        <div>
            <label class="block mb-1 font-bold text-gray-500">Upload Logo</label>
            <input type="file" id="logo" name="logo" required class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
        </div>
        <div>
            <label class="block mb-1 font-bold text-gray-500">Company Name</label>
            <input type="text" id="company-name" name="company-name" required class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" placeholder="Company Name">
        </div>
        <div>
            <strong>Workspace URL:</strong> <span id="workspace-url">https://app.cardboardwm.com/</span>
        </div>
        <button type="button" id="step-1-next" class="block w-full bg-purple-500 hover:bg-purple-400 p-4 rounded text-white font-bold">Next</button>
    </div>

    <div class="bg-white p-16 rounded shadow-2xl w-2/3 space-y-8" id="step-2" style="display: none;">
        <h2 class="text-3xl font-bold mb-10 text-gray-800">Step 2: Personal Info</h2>
        <!-- Add your personal info fields here -->
        <button type="button" id="step-2-next" class="block w-full bg-purple-500 hover:bg-purple-400 p-4 rounded text-white font-bold">Next</button>
    </div>

    <div class="bg-white p-16 rounded shadow-2xl w-2/3 space-y-8" id="step-3" style="display: none;">
        <h2 class="text-3xl font-bold mb-10 text-gray-800">Step 3: Finalize</h2>
        <div>
            <strong>Team URL:</strong> <span id="team-url">https://app.cardboardwm.com/team/</span>
        </div>
        <button type="button" id="final-submit" class="block w-full bg-purple-500 hover:bg-purple-400 p-4 rounded text-white font-bold">Let's Go!</button>
    </div>
</div>
<?php include_once 'footer.php'; ?>
