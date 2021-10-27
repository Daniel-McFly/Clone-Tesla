import React from 'react';


import DefaultOverlayContent from '../DefaultOverlayContent';
import { ModelsWrapper, ModelSection } from '../Models';
import UniqueOverlay from '../UniqueOverlay';

import { Container } from './styles';



const Page: React.FC =  () => {
  return(
    <Container>
      <ModelsWrapper>
      <div>
          {[
            'Model One',
            'Model Two',
            'Model Three',
            'Model Four',
            'Model Five',
            'Model Six',
            'Model Seven',
          ].map(modelName => ( 
          <ModelSection
            key = {modelName}
            className="colored"
            modelName = {modelName}
            overlayNode={
              <DefaultOverlayContent
                label= {modelName}
                description ="order online..." 
              />
            }
          />
          ))}
        </div>
        <UniqueOverlay>
          
        </UniqueOverlay>
      </ModelsWrapper>
   
    </Container>
  );
};

export default Page;
