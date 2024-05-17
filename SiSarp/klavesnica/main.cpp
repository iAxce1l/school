#include <windows.h>
#include <mmdeviceapi.h>
#include <endpointvolume.h>
#include <iostream>
#include <cstdlib>
#include <sstream>

// Function to get the default audio endpoint
IMMDevice* GetDefaultAudioEndpoint() {
    IMMDeviceEnumerator* pEnumerator = nullptr;
    IMMDevice* pDevice = nullptr;

    // Create the device enumerator
    if (CoCreateInstance(
        __uuidof(MMDeviceEnumerator),
        nullptr,
        CLSCTX_INPROC_SERVER,
        __uuidof(IMMDeviceEnumerator),
        (LPVOID*)&pEnumerator) != S_OK) {
        std::cerr << "Failed to create device enumerator" << std::endl;
        return nullptr;
    }

    // Get the default audio endpoint
    if (pEnumerator->GetDefaultAudioEndpoint(eRender, eConsole, &pDevice) != S_OK) {
        std::cerr << "Failed to get default audio endpoint" << std::endl;
        pEnumerator->Release();
        return nullptr;
    }

    pEnumerator->Release();
    return pDevice;
}

int main() {
    // Initialize COM
    CoInitialize(nullptr);

    // Get the default audio endpoint
    IMMDevice* pDevice = GetDefaultAudioEndpoint();
    if (!pDevice) {
        CoUninitialize();
        return 1;
    }

    // Activate the audio endpoint volume interface
    IAudioEndpointVolume* pVolume = nullptr;
    if (pDevice->Activate(__uuidof(IAudioEndpointVolume), CLSCTX_INPROC_SERVER, nullptr, (LPVOID*)&pVolume) != S_OK) {
        std::cerr << "Failed to activate audio endpoint volume interface" << std::endl;
        pDevice->Release();
        CoUninitialize();
        return 1;
    }

    // Get the volume level
    float volumeLevel;
    if (pVolume->GetMasterVolumeLevelScalar(&volumeLevel) != S_OK) {
        std::cerr << "Failed to get volume level" << std::endl;
    }
    else {
        // Build the command string directly and execute it
        std::string command = "py C:\\Users\\kamo4\\Desktop\\keyboard.py " + std::to_string(volumeLevel);

        // Display the command
        std::cout << "Executing command: " << command << std::endl;

        // Execute the command
        std::system(command.c_str());
    }

    // Release COM interfaces
    pVolume->Release();
    pDevice->Release();
    CoUninitialize();

    return 0;
}