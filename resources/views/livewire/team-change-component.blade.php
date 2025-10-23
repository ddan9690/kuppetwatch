<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Team Change Coalition - Organization Chart</title>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #1a4d2e 0%, #2d5016 100%);
      min-height: 100vh;
      padding: 20px;
      color: #333;
    }
    .container { max-width: 1400px; margin: 0 auto; }
    .header {
      text-align: center; margin-bottom: 40px; padding: 30px;
      background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
      border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }
    .header h1 {
      font-size: 2.5rem; color: #1a4d2e; margin-bottom: 10px;
      text-transform: uppercase; letter-spacing: 2px;
    }
    .header p { font-size: 1.2rem; color: #2d5016; font-weight: 600; }
    .org-chart {
      display: flex; flex-direction: column; align-items: center; gap: 40px;
    }
    .level { display: flex; flex-direction: column; align-items: center; width: 100%; position: relative; }
    .level-title {
      background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
      color: white; padding: 12px 30px; border-radius: 25px;
      font-weight: bold; font-size: 1.1rem; margin-bottom: 25px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2); text-transform: uppercase;
    }
    .cards-container {
      display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; width: 100%;
    }
    .card {
      background: white; border-radius: 15px; padding: 20px;
      width: 280px; box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      transition: all 0.3s ease; cursor: pointer; border: 3px solid transparent;
      text-align: center;
    }
    .card:hover { transform: translateY(-10px); border-color: #ffd700; }
    .card-image {
      width: 100%; height: 200px; object-fit: cover;
      border-radius: 10px; margin-bottom: 15px;
    }
    .card-position {
      font-weight: bold; color: #1a4d2e; margin-bottom: 8px;
      text-transform: uppercase; font-size: 0.9rem;
    }
    .card-name { font-size: 1.3rem; color: #333; margin-bottom: 10px; font-weight: 600; }
    .view-btn {
      display: inline-block; background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
      color: white; padding: 8px 20px; border-radius: 25px;
      text-decoration: none; font-size: 0.9rem; font-weight: bold;
    }
    .view-btn:hover { background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%); color: #1a4d2e; }

    /* Executive Secretary */
    .executive-secretary {
      background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
      border: 5px solid #4CAF50;
      box-shadow: 0 15px 40px rgba(255,215,0,0.5);
      transform: scale(1.05);
      width: 350px;
    }
    .executive-secretary .card-name { font-size: 1.6rem; color: #1a4d2e; }
    .executive-secretary .card-position { color: #2d5016; font-size: 1rem; font-weight: bold; }

    .separator { width: 100%; height: 2px; background: #ffd700; margin: 60px 0 20px 0; opacity: 0.6; }

    /* Modal */
    .modal {
      position: fixed; top: 0; left: 0; width: 100%; height: 100%;
      background: rgba(0,0,0,0.8); display: flex; align-items: center; justify-content: center; z-index: 1000;
      padding: 20px;
    }
    .modal-content {
      background: white; border-radius: 20px; padding: 40px; max-width: 500px; width: 100%;
      position: relative; animation: slideIn 0.3s ease;
    }
    @keyframes slideIn { from { transform: translateY(-50px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
    .modal-close {
      position: absolute; top: 15px; right: 15px; background: #f44336;
      color: white; border: none; width: 35px; height: 35px; border-radius: 50%;
      cursor: pointer; font-size: 1.2rem;
    }
    .modal-image { width: 100%; height: 300px; object-fit: cover; border-radius: 15px; margin-bottom: 20px; }
    .modal-position { color: #4CAF50; font-weight: bold; font-size: 1.1rem; margin-bottom: 10px; text-transform: uppercase; }
    .modal-name { font-size: 2rem; color: #1a4d2e; margin-bottom: 15px; font-weight: bold; }
    .modal-description { color: #666; line-height: 1.6; font-size: 1.1rem; }

    .pledge-section {
      margin-top: 80px; padding: 40px; background: rgba(255,255,255,0.1);
      border-radius: 15px; text-align: center; color: white;
    }
    .pledge-section h2 { font-size: 1.8rem; margin-bottom: 15px; color: #ffd700; }
    .pledge-form { display: flex; flex-direction: column; align-items: center; gap: 15px; max-width: 500px; margin: 0 auto; }
    .pledge-form input, .pledge-form select {
      width: 100%; padding: 12px; border: none; border-radius: 8px; outline: none; font-size: 1rem;
    }
    .pledge-form button {
      background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
      color: #1a4d2e; font-weight: bold; border: none; border-radius: 8px;
      padding: 12px 25px; cursor: pointer; font-size: 1rem;
    }
  </style>
</head>

<body>
  <div class="container" x-data="orgChart()">
    <div class="header">
      <h1>🌟 Team Change Coalition 🌟</h1>
      <p>Leadership Structure 2025</p>
    </div>

    <div class="org-chart">
      <!-- Executive Secretary -->
      <div class="level">
        <div class="cards-container">
          <div class="card executive-secretary" @click="openModal(candidates.executiveSecretary)">
            <img :src="candidates.executiveSecretary.image" alt="Executive Secretary" class="card-image" />
            <div class="card-position">Executive Secretary</div>
            <div class="card-name" x-text="candidates.executiveSecretary.name"></div>
            <a href="#" class="view-btn">View Profile</a>
          </div>
        </div>
      </div>

      <!-- Executive Docket -->
      <div class="level">
        <div class="level-title">🏛️ Executive Docket</div>
        <div class="cards-container">
          <template x-for="candidate in candidates.executive" :key="candidate.position">
            <div class="card" @click="openModal(candidate)">
              <img :src="candidate.image" class="card-image" />
              <div class="card-position" x-text="candidate.position"></div>
              <div class="card-name" x-text="candidate.name"></div>
            </div>
          </template>
        </div>
      </div>

      <!-- Assistants Docket -->
      <div class="level">
        <div class="level-title">👥 Assistants Docket</div>
        <div class="cards-container">
          <template x-for="candidate in candidates.assistants" :key="candidate.position">
            <div class="card" @click="openModal(candidate)">
              <img :src="candidate.image" class="card-image" />
              <div class="card-position" x-text="candidate.position"></div>
              <div class="card-name" x-text="candidate.name"></div>
            </div>
          </template>
        </div>
      </div>

      <!-- Secretariat -->
      <div class="level">
        <div class="level-title">📋 Secretariat</div>
        <div class="cards-container">
          <template x-for="candidate in candidates.secretariat" :key="candidate.position">
            <div class="card" @click="openModal(candidate)">
              <img :src="candidate.image" class="card-image" />
              <div class="card-position" x-text="candidate.position"></div>
              <div class="card-name" x-text="candidate.name"></div>
            </div>
          </template>
        </div>
      </div>

      <!-- Gender Docket -->
      <div class="level">
        <div class="level-title">⚖️ Gender Docket</div>
        <div class="cards-container">
          <template x-for="candidate in candidates.gender" :key="candidate.position">
            <div class="card" @click="openModal(candidate)">
              <img :src="candidate.image" class="card-image" />
              <div class="card-position" x-text="candidate.position"></div>
              <div class="card-name" x-text="candidate.name"></div>
            </div>
          </template>
        </div>
      </div>

      <div class="separator"></div>

      <!-- Team Change Chairman -->
      <div class="level">
        <div class="level-title">🏁 Team Change Chairman</div>
        <div class="cards-container">
          <div class="card" @click="openModal(candidates.chairman)">
            <img :src="candidates.chairman.image" alt="Chairman" class="card-image" />
            <div class="card-position">Team Change Chairman</div>
            <div class="card-name" x-text="candidates.chairman.name"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <template x-if="selectedCandidate">
      <div class="modal" @click.self="closeModal()">
        <div class="modal-content">
          <button class="modal-close" @click="closeModal()">×</button>
          <img :src="selectedCandidate.image" class="modal-image" />
          <div class="modal-position" x-text="selectedCandidate.position"></div>
          <div class="modal-name" x-text="selectedCandidate.name"></div>
          <div class="modal-description" x-text="selectedCandidate.description"></div>
        </div>
      </div>
    </template>
  </div>

  <script>
    function orgChart() {
      const pics = [
        'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400',
        'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400',
        'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400'
      ];
      const pic = () => pics[Math.floor(Math.random() * pics.length)];
      return {
        selectedCandidate: null,
        candidates: {
          executiveSecretary: {
            position: 'Executive Secretary',
            name: 'Tom Thomas Odhiambo',
            image: pic(),
            description: 'Chief Executive and face of Team Change. Leads with vision, unity, and strategic leadership.'
          },
          executive: [
            { position: 'Chairman', name: 'Peter Oduor Otieno (Blacky)', image: pic(), description: 'Provides leadership guidance and strategic direction.' },
            { position: 'Treasurer', name: 'Tembo Gordon Mwadime', image: pic(), description: 'Oversees all financial matters with integrity and transparency.' }
          ],
          assistants: [
            { position: 'Vice Chairman', name: 'Kevince Owino Magolloh', image: pic(), description: 'Supports the chairman in leadership and coordination.' },
            { position: 'Assistant Executive Secretary', name: 'Kennedy Ochieng Atang\'a', image: pic(), description: 'Ensures smooth operations and assists in administration.' },
            { position: 'Assistant Treasurer', name: 'Felix Oduor John (Jachelsea)', image: pic(), description: 'Handles financial record-keeping and assistant treasury functions.' }
          ],
          secretariat: [
            { position: 'Organising Secretary', name: 'Churchill Omondi Aroko', image: pic(), description: 'Coordinates events, communication, and mobilization efforts.' },
            { position: 'Secretary Tertiary', name: 'Lucas Onyango Okinda', image: pic(), description: 'Represents the tertiary education sector in Team Change.' },
            { position: 'Secretary Secondary', name: "Collins Omondi Onguong'a", image: pic(), description: 'Oversees secondary education-related matters.' },
            { position: 'Secretary Junior', name: 'Philip Ogwe Otieno', image: pic(), description: 'Focuses on junior school education policies.' }
          ],
          gender: [
            { position: 'Secretary Gender', name: 'Rose Amandi Okeyo', image: pic(), description: 'Advocates for gender inclusivity and empowerment.' },
            { position: '1st Assistant Secretary', name: 'Quinter Nyakiye', image: pic(), description: 'Supports administrative coordination and records.' },
            { position: '2nd Assistant Secretary', name: "Eunice Ochieng' Ouru", image: pic(), description: 'Provides clerical and documentation support.' }
          ],
          chairman: {
            position: 'Team Change Chairman',
            name: 'Corazon Aquino Keta',
            image: pic(),
            description: 'Campaign face symbolizing unity and progress within Team Change.'
          }
        },
        openModal(candidate) {
          this.selectedCandidate = candidate;
          document.body.style.overflow = 'hidden';
        },
        closeModal() {
          this.selectedCandidate = null;
          document.body.style.overflow = 'auto';
        }
      };
    }
  </script>
</body>
</html>
