using System;
using System.Text.RegularExpressions;

namespace evidenciaoprav.Utils
{
    public static class ValidationHelper
    {
        public static bool IsValidLicensePlate(string licensePlate)
        {
            // Implement your license plate validation logic
            return !string.IsNullOrWhiteSpace(licensePlate);
        }

        public static bool IsValidVIN(string vin)
        {
            // Implement VIN validation logic
            return !string.IsNullOrWhiteSpace(vin) && vin.Length == 17;
        }

        public static bool IsValidYear(int year)
        {
            return year >= 1900 && year <= DateTime.Now.Year;
        }
    }
}