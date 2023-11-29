import json
import random

class DataSeeder:
    @staticmethod
    def generate_demo_data():
        demo_osts = []

        for i in range(3):
            # Erstelle ein Demo-OST
            ost = {
                "unique_id": f"ost_{i+1}",
                "name": f"OST {i+1}",
                "video_game_name": f"Game {i+1}",
                "release_year": random.randint(1990, 2023),
                "track_list": DataSeeder.generate_demo_tracks()
            }
            demo_osts.append(ost)

        return demo_osts

    @staticmethod
    def generate_demo_tracks():
        demo_tracks = []

        for i in range(4):
            # Erstelle ein Demo-Track
            track = {
                "unique_id": f"track_{i+1}",
                "name": f"Track {i+1}",
                "artist": f"Artist {i+1}",
                "track_number": i+1,
                "duration": random.randint(120, 300)  # Dauer in Sekunden
            }
            demo_tracks.append(track)

        return demo_tracks

# Beispielnutzung des Seeders und Speichern der Daten in einer JSON-Datei
demo_data = DataSeeder.generate_demo_data()

# Speichern der Demo-Daten in einer JSON-Datei
output_filename = "demo_data.json"

with open(output_filename, 'w') as file:
    json.dump(demo_data, file, indent=2)  # Schreibe die Daten in die Datei mit Einrückungen für bessere Lesbarkeit

print(f"Demo data has been saved to {output_filename}")
